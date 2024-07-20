<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Hewan\HewanController;
use App\Http\Controllers\Jenis\JenisController;

Route::middleware('belum_login')->group(function(){
    
    Route::get('/', [AuthController::class,'index'])->name('/');
    Route::post('login', [AuthController::class,'login'])->name('login');
    Route::get('register', [AuthController::class,'register'])->name('register');
    Route::post('prosesregis', [Authcontroller::class, 'prosesregis'])->name('prosesregis');
});

Route::middleware('telah_login')->group(function(){
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('dashboard', [HomeController::class, 'home'])->name('dashboard');

    Route::get('jenis', [JenisController::class,'jenis'])->name('jenis');
    Route::get('tambah', [JenisController::class,'tambah'])->name('tambah');
    Route::post('tambah.simpan', [JenisController::class,'simpan'])->name('simpan');
    Route::get('editjenis.data/{id}', [JenisController::class,'editjenis'])->name('editjenis');
    Route::post('update.data/{id}', [JenisController::class,'update'])->name('update');
    Route::get('hapus.data/{id}', [JenisController::class, 'hapus'])->name('hapus');

    Route::get('hewan', [HewanController::class,'hewan'])->name('hewan');
    Route::get('tambahhewan', [HewanController::class,'tambahhewan'])->name('tambahhewan');
});

