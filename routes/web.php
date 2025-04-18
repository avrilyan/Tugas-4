<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\PeriksaController;


// Halaman tampilan login & register
Route::view('/login', 'auth.login')->name('login');
Route::view('/register', 'auth.register')->name('register');
Route::get('/dokter', [HomeController::class, 'dokter'])->name('dokter');

// Handle POST Login
Route::post('/login', function (Request $request) {
    $user = User::where('email', $request->email)->first();

    if ($user && Hash::check($request->password, $user->password)) {
        session(['user' => $user]);
        if ($user->role === 'pasien') {
            return redirect()->route('pasien.dashboard');
        } elseif ($user->role === 'dokter') {
            return redirect()->route('dokter.dashboard');
        }
    }

    return back()->with('error', 'Email atau password salah');
});

// Logout manual
Route::get('/logout', function () {
    session()->forget('user');
    return redirect('/login');
});

// PASIEN
Route::prefix('pasien')->group(function () {
    Route::view('/dashboard', 'pasien.dashboard')->name('pasien.dashboard');
    Route::view('/periksa', 'pasien.periksa')->name('pasien.periksa');
    Route::view('/riwayat', 'pasien.riwayat')->name('pasien.riwayat');
});

// DOKTER
Route::prefix('dokter')->group(function () {
    Route::view('/dashboard', 'dokter.dashboard')->name('dokter.dashboard');
    Route::view('/periksa', 'dokter.periksa')->name('dokter.periksa');
    Route::view('/obat', 'dokter.obat')->name('dokter.obat');
});

// Default
Route::view('/', 'welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/dokter', [HomeController::class, 'dokter'])->name('dokter');
Route::prefix('dokter')->group(function(){
    Route::resource('obat', ObatController::class);
    Route::resource('periksa', PeriksaController::class);
});
