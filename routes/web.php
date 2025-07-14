<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SpotifyController; // ⬅️ Tambahkan baris ini

// Halaman awal (publik)
Route::get('/', function () {
    return view('welcome');
});

// Grup halaman yang hanya bisa diakses setelah login
Route::middleware(['auth'])->group(function () {
    Route::view('/home', 'pages.home')->name('home');
    Route::view('/about', 'pages.about')->name('about');
    Route::view('/projects', 'pages.projects')->name('projects');
    Route::view('/contact', 'pages.contact')->name('contact');

    Route::get('/profile', function () {
        $user = Auth::user();
        return view('pages.profile', compact('user'));
    })->name('profile');

    // Optional: arahkan dashboard ke home
    Route::get('/dashboard', function () {
        return redirect('/home');
    })->name('dashboard');

    // Tambahan: Edit Profil (dari Laravel Breeze)
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // ✅ Tambahkan ini untuk halaman music player
    Route::get('/music', [SpotifyController::class, 'index'])->name('music');
});

require __DIR__.'/auth.php';
