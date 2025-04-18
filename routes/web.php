<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\PeriksaController;
use App\Http\Middleware\CheckUserRole;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(); 
Route::prefix('pasien')->group(function(){
    Route::get('/',[HomeController::class,"index"])->name("pasien");
    Route::resource('obat', PeriksaController::class);
});

Route::middleware(['auth',CheckUserRole::class.':dokter'])->group(function () {
    Route::prefix('dokter')->group(function() {
        Route::resource('obat', ObatController::class);
        Route::resource('periksa', PeriksaController::class);
        Route::get('/', [HomeController::class, 'dokter'])->name('dokter');
    });

    //route logout
    // Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
});