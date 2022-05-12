<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BotManController;
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
    Route::get('/planting/details', [UserController::class, 'planting_details_pdf'])->name('planting_details_pdf');

    Route::get('/test', function () {
        $database = app('firebase.database');

        $reference = $database->getReference('cant_cultivate/-N0jDbEceHRDRrgaw7T4');
        $snapshot = $reference->getSnapshot();
        $value = $snapshot->getValue();
        $cant_cultivate_zones = array_map('strtolower',array_keys($value));
        $imploded_cant_cultivate_cities = implode('|', $cant_cultivate_zones);

        $reference = $database->getReference('zones/-N0j9C_qP_ZV_Zk-e0Qg');
        $snapshot = $reference->getSnapshot();
        $value = $snapshot->getValue();
        $all_zones_simple = array_map('strtolower',array_keys($value));

        $imploded_cities = implode('|', $all_zones_simple);
        if(preg_match('/'.$imploded_cities.'/i', strtolower('sfsdf colombo fsfsd'), $matched)) {
            echo('Sir! According to our data you belong to the <span style="color: #5cb85c"><b>'. $value[ucwords(strtolower($matched[0]))] . '</b></span>');
            $impolded_zone = explode(' ', $value[ucwords(strtolower($matched[0]))]);
            
        }
        // else if(preg_match('/'.$imploded_cant_cultivate_cities.'/i', strtolower($this->main_city), $matched)) {
        //     $this->bot->startConversation(new NotSuitableZone());
        // }else{
        //     $this->repeat('Enter a correct zone');
        // }
    });
});