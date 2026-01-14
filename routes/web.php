<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CommentController; // <--- Pastikan ini ada (Fitur Komentar)
use App\Http\Controllers\ProfileController; // <--- TAMBAHAN BARU (Fitur Profil)

// === HALAMAN PUBLIK (Bisa diakses siapa saja) ===
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/tentang-kami', [HomeController::class, 'about'])->name('about');
Route::get('/kontak', [HomeController::class, 'contact'])->name('contact');
Route::get('/artikel/{slug}', [HomeController::class, 'show'])->name('public.show');
Route::post('/comments', [App\Http\Controllers\CommentController::class, 'store'])->name('comments.store');

// Rute Kirim Komentar (Tadi sempat hilang, saya kembalikan)
Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');

// === AUTHENTICATION ===
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);

    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// === HALAMAN ADMIN (Harus Login) ===
Route::middleware('auth')->group(function () {
    // Dashboard & CRUD Berita
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('posts', PostController::class);

    // === PENGATURAN AKUN (BARU DITAMBAHKAN) ===
    // 1. Halaman Edit Profil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // 2. Proses Update Nama & Email
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // 3. Proses Ganti Password
    Route::put('/profile/password', [ProfileController::class, 'updatePassword'])->name('profile.password');
});