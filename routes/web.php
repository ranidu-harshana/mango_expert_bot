<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\BotManController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/botmans', function () {
    return view('botman');
});

Route::match(['post'], 'botman', [BotManController::class, 'handle']);

Route::get('/login', [LoginController::class, 'login_form'])->name('login_form');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/register', [LoginController::class, 'register_form'])->name('register_form');
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');