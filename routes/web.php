<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EkstrakurikulerController;

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
Route::get('/login',[AuthController::class,'index_login'])->name('index_login')->middleware('guest');
Route::post('/login',[AuthController::class,'login']);
Route::get('/register',[AuthController::class,'index_register'])->name('index_register')->middleware('guest');
Route::post('/register',[AuthController::class,'store']);

//home
Route::get('/home',[HomeController::class,'index_home'])->name('index_home');

//admin

Route::middleware(['auth', 'role:admin'])->group(function () {
Route::get('/admin',[AdminController::class,'index_admin'])->name('index_admin');
Route::get('/admin/absen',[AdminController::class,'index_absen'])->name('index_absen');
Route::get('/admin/absen/ekskul',[AdminController::class,'index_ekskul'])->name('index_ekskul');
Route::get('/admin/input',[AdminController::class,'index_input'])->name('index_input');
Route::get('/admin/input/tambah',[AdminController::class,'index_tambahinput'])->name('index_tambahinput');
Route::post('/admin/input/tambah',[EkstrakurikulerController::class,'create'])->name('create_ekskul');
Route::get('/admin/siswa',[AdminController::class,'index_siswa'])->name('index_siswa');
});
//anggota
Route::get('/anggota/1',[HomeController::class,'index_dashboard'])->name('index_dashboard');
Route::get('/anggota/2',[HomeController::class,'index_dashboard2'])->name('index_dashboard2');
Route::get('/anggota/3',[HomeController::class,'index_dashboard3'])->name('index_dashboard3');
