<?php

use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Auth;
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

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::prefix('user')
    ->name('user.')
    ->group(function () {
        Route::middleware('guest')->group(function () {
            Route::view('/login', 'dashboard.user.login')->name('login');
            Route::view('/register', 'dashboard.user.register')->name('register');
            Route::post('/create', [UserController::class, 'create'])->name('create');
            Route::post('/check', [UserController::class, 'check'])->name('check');
        });

        Route::middleware('auth')->group(function () {
            Route::view('/home', 'dashboard.user.home')->name('home');
           // Route::post('/logout',[UserController::class, 'logout'])->name('logout');
        });
    });
