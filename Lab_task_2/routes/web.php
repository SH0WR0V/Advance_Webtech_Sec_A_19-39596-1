<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

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

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/login',[HomeController::class,'login'])->name('login');
Route::get('/registration',[HomeController::class,'registration'])->name('registration');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::get('/product',[HomeController::class,'product'])->name('product');
Route::get('/teams',[HomeController::class,'teams'])->name('teams');

Route::post('/login',[HomeController::class,'loginSubmit'])->name('loginSubmit');
Route::post('/registration',[HomeController::class,'registrationSubmit'])->name('registrationSubmit');
Route::post('/contact',[HomeController::class,'contactSubmit'])->name('contactSubmit');
