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
    Route::get('/plantations', [UserController::class, 'plantations'])->name('user.plantations');
    Route::get('/profile', [UserController::class, 'profile'])->name('user.profile');
    Route::get('/planting/details', [UserController::class, 'planting_details_pdf'])->name('planting_details_pdf');
    Route::put('/user/update', [UserController::class, 'update'])->name('user.update');
    Route::put('/user/fertilizer', [UserController::class, 'fertilizer'])->name('user.fertilizer');
    
});
Route::get('/test', function () {
    $database = app('firebase.database');

    $postData = [
        '1How When to apply' => '5th  year flowering At the time',
        '2Type'=>["Urea"=>165, "ERP"=>492, "MOP"=>570],
        '3Amount of fertilizer required'=>["N"=>76, "P2O5"=>138, "K2O"=>342],
    ];
    $postRef = $database->getReference('for_wetzone_table')->push($postData);
    
    echo "<pre>";
    $key = $database->getReference('for_wetzone_table')->getChildKeys();
    print_r($key);
    echo "</pre><br>";

    // return view("test");
});