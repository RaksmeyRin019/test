<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/navbar',[App\Http\Controllers\Controller::class,'nab'])->name('navbar');
Route::get('/slidebar',[App\Http\Controllers\Controller::class,'slideb'])->name('slidebar');
Route::get('/login',[App\Http\Controllers\Controller::class,'login'])->name('login');
Route::get('/register',[App\Http\Controllers\Controller::class,'register'])->name('register');
Route::get('/password',[App\Http\Controllers\Controller::class,'pass'])->name('password');


Route::get('/home', [App\Http\Controllers\Controller::class, 'indexs'])->name('home');