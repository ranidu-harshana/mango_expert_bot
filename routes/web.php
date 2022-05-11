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
            $results = $database->getReference('/mango_varieties/-N0jBoLWAU2xL-2RcNW3/')->getChildKeys();
            $suitable_mangoes = [];
            foreach ($results as $key => $mango_variety) {
                $result = $database->getReference('/mango_varieties/-N0jBoLWAU2xL-2RcNW3/'.$mango_variety)->getValue();
                if($result['wet_zone'] && $result['ground']) {
                    array_push($suitable_mangoes, $mango_variety);
                }
            }
            echo $suitable_mangoes[rand(0, count($suitable_mangoes)-1)];
    });
});