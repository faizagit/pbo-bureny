<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


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

//Auth
Route::get('/login',[AuthController::class,'index_login'])->name('index_login');
Route::get('/register',[AuthController::class,'index_register'])->name('index_register');

//home
Route::get('/home',[HomeController::class,'index_home'])->name('index_home');

//admin
Route::get('/admin',[AdminController::class,'index_admin'])->name('index_admin');
Route::get('/admin/absen',[AdminController::class,'index_absen'])->name('index_absen');
Route::get('/admin/input',[AdminController::class,'index_input'])->name('index_input');
Route::get('/admin/input/tambah',[AdminController::class,'index_tambahinput'])->name('index_tambahinput');
Route::get('/admin/siswa',[AdminController::class,'index_siswa'])->name('index_siswa');
