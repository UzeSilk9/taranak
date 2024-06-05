<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Jenis\JenisController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class,'index'])->name('/');
Route::post('login', [AuthController::class,'login'])->name('login');

Route::get('register', [AuthController::class,'register'])->name('register');
Route::post('prosesregis', [Authcontroller::class, 'prosesregis'])->name('prosesregis');

Route::get('dashboard', [HomeController::class, 'home'])->name('dashboard');

Route::get('jenis', [JenisController::class,'jenis'])->name('jenis');