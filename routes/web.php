<?php

use Illuminate\Http\Request;
use App\Mail\EmailVerificationOtp;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CabangController;
use App\Http\Controllers\Farmasi\ObatController;
use App\Http\Controllers\Dokter\DokterController;
use App\Http\Controllers\Pasien\PasienController;
use App\Http\Controllers\Farmasi\FarmasiController;
use App\Http\Controllers\Admin\PemeriksaanController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/email/verify-otp', function () {
    return view('auth.verify-otp');
})->middleware('auth')->name('verification.otp.form');
Route::post('/email/verify-otp', function (Request $request) {
    $request->validate([
        'otp' => ['required', 'digits:6'],
    ]);
    $user = auth()->user();
    if ($user->email_verification_code == $request->otp) {
        $user->markEmailAsVerified();
        $user->email_verification_code = null;
        $user->save();
        return redirect()->intended('/dashboard')->with('success', 'Email berhasil diverifikasi.');
    }
    return back()->withErrors(['otp' => 'Kode OTP salah.']);
})->middleware(['auth'])->name('verification.otp.submit');
Route::post('/email/resend-otp', function () {
    $user = auth()->user();
    $otp = rand(100000, 999999);
    $user->email_verification_code = $otp;
    $user->save();
    Mail::to($user->email)->send(new EmailVerificationOtp($otp));
    return back()->with('status', 'Kode OTP telah dikirim ulang.');
})->middleware('auth')->name('verification.otp.resend');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//! Admin Routes
Route::middleware(['auth', 'AdminMiddleware'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('dashboard');
    Route::resource('pemeriksaan', PemeriksaanController::class);
    Route::resource('cabang', CabangController::class);
    
});

//! Dokter Routes
Route::middleware(['auth', 'DokterMiddleware'])->prefix('dokter')->name('dokter.')->group(function () {
    Route::get('/', [DokterController::class, 'index'])->name('dashboard');
});

//! Farmasi Routes
Route::middleware(['auth', 'FarmasiMiddleware'])->prefix('farmasi')->name('farmasi.')->group(function () {
    Route::get('/', [FarmasiController::class, 'index'])->name('dashboard');
    Route::resource('obat', ObatController::class);
});

//! Pasien Routes
Route::middleware(['auth', 'PasienMiddleware'])->prefix('pasien')->name('pasien.')->group(function () {
    Route::get('/', [PasienController::class, 'index'])->name('dashboard');
});

require __DIR__.'/auth.php';