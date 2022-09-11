<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BotManController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\UserController;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['is_guest'])->group(function () {
    Route::get('/', [UserController::class, 'guest'])->name('user.guest');
    Route::get('/home', [UserController::class, 'guest'])->name('user.guest');

    Route::get('/login', [LoginController::class, 'login_form'])->name('login_form');
    Route::post('/login', [LoginController::class, 'login'])->name('login');
    Route::get('/register', [RegisterController::class, 'register_form'])->name('register_form');
    Route::post('/register', [RegisterController::class, 'register'])->name('register');
});

Route::middleware(['is_logged_in'])->group(function () {
    Route::get('/botmans', function () {
        return view('botman');
    });

    Route::match(['post'], 'botman', [BotManController::class, 'handle']);

    Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

    Route::get('/user', [UserController::class, 'index'])->name('user.index');
    Route::get('/plantations', [UserController::class, 'plantations'])->name('user.plantations');
    Route::get('/profile', [UserController::class, 'profile'])->name('user.profile');
    Route::get('/planting/details', [UserController::class, 'planting_details_pdf'])->name('planting_details_pdf');
    Route::put('/user/update', [UserController::class, 'update'])->name('user.update');
    Route::put('/user/fertilizer', [UserController::class, 'fertilizer'])->name('user.fertilizer');
    Route::get('/user/welcomemail', [MailController::class, 'sendWelcomeMail'])->name('user.welcomemail');
    Route::get('/user/fertilizermail', [MailController::class, 'sendFertilizerMail'])->name('user.fertilizermail');
    Route::post('/user/fertilizers', [UserController::class, 'show_tables'])->name('user.fertilizers');
});
Route::get('/test', function () {
    $mango_variety = "Karutha colomban";
            
            $database = app('firebase.database');

            $reference = $database->getReference('mango_varieties/-N0jBoLWAU2xL-2RcNW3');
            $snapshot = $reference->getSnapshot();
            $value = $snapshot->getValue();
            $all_mango_varieties_simple = array_map('strtolower',array_keys($value));
            $imploded_mango_varieties = implode('|', $all_mango_varieties_simple);

            $zone = "wet_zone";
            if(preg_match("/".$imploded_mango_varieties."/i", strtolower($mango_variety), $matched)) {
                $fake = false;
                try {
                    $res = $value[ucfirst(strtolower($mango_variety))][$zone];
                    $decided_plant = ucfirst(strtolower($mango_variety));
                } catch (\Throwable $th) {
                    $fake = true;
                }

                if ($fake) {
                    try {
                        $res = $value[ucwords(strtolower($mango_variety), " ")][$zone];
                        $decided_plant = ucwords(strtolower($mango_variety), " ");
                    } catch (\Throwable $th) {
                        $res = $th;
                    }
                }
                
                var_dump($res);
                if ($res) {
                    echo("According to your city <span style='color: #5cb85c'><b>".$decided_plant."</b></span> is suitable!\nThanks good luck");
                    
                } else {
                    echo("According to your city <span style='color: red'><b>".$decided_plant."</b></span> is not suitable!");
                }
            } else {
                echo('I cannot identify this mango variety');
            }
});