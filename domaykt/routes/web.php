<?php
namespace routes;

use App\Http\Controllers\AUTH\Auth_controller;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WEB\Admin_controller;
use App\Http\Controllers\WEB\User_controller;
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
#All User
Route::get('/', [User_controller::class, 'welcome_page'])->name('welcome');
Route::get('see_house/{id}', [User_controller::class, 'see_house'])->name('see_house');



#Auth
Route::get('/register',[Auth_controller::class,'registerForm'])->name('register');
Route::post('/register',[Auth_controller::class,'register'])->name('register.post');
Route::get('/profile',[Auth_controller::class,'profile'])->name('profile');

Route::get('/login',[Auth_controller::class,'loginForm'])->name('login');
Route::post('/login',[Auth_controller::class,'login'])->name('login.post');
Route::post('/logout',[Auth_controller::class,'logout'])->name('logout');

#Admin functions
Route::get('/create_novostroy_user',[Admin_controller::class,'user_stroy_form'])->name('create_novostroy_user');
Route::post('/create_novostroy_user',[Admin_controller::class,'create_user_stroy'])->name('create_novostroy_user.post');
Route::post('/create_stroy',[Admin_controller::class,'create_stroy'])->name('create_stroy.post');

Route::get('/create_house',[Admin_controller::class,'create_house_form'])->name('create_house');
Route::post('/create_house',[Admin_controller::class,'create_house'])->name('create_house.post');

Route::get('/add_flats',[Admin_controller::class,'add_flats_forms'])->name('add_flats_forms');
Route::post('/add_flats',[Admin_controller::class,'add_flats'])->name('add_flats.post');

#User functions
//Route::get('/')
#Route::get('/')
