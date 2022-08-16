<?php
namespace routes;

use App\Http\Controllers\AUTH\Auth_controller;
use App\Http\Controllers\Controller;
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

Route::get('/register',[Auth_controller::class,'registerForm'])->name('register');
Route::post('/register',[Auth_controller::class,'register'])->name('register.post');
Route::get('/profile',[Auth_controller::class,'profile'])->name('profile');

Route::get('/login',[Auth_controller::class,'loginForm'])->name('login');
Route::post('/login',[Auth_controller::class,'login'])->name('login.post');
Route::post('/logout',[Auth_controller::class,'logout'])->name('logout');
