<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Public Routes
Route::get('/', fn() => Inertia::render('Home'))->name('home');
Route::get('/about', fn() => Inertia::render('About'))->name('about');
Route::get('/blogs', fn() => Inertia::render('Blogs'))->name('blogs');
Route::get('/contact', fn() => Inertia::render('Contact'))->name('contact');
Route::get('/privacy-policy', fn() => Inertia::render('PrivacyPolicy'))->name('privacy-policy');
Route::get('/terms-of-service', fn() => Inertia::render('TermsOfService'))->name('terms-of-service');
Route::get('/help', fn() => Inertia::render('Help'))->name('help');

// Auth Routes
Route::get('/login', fn() => Inertia::render('Auth/Login'))->name('auth.login');
Route::get('/register', fn() => Inertia::render('Auth/Register'))->name('auth.register');

// Protected Routes
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', fn() => Inertia::render('Dashboard'))->name('dashboard');
    Route::get('/profile', fn() => Inertia::render('Profile/Edit'))->name('profile.edit');
    Route::get('/logout', fn() => Inertia::render(  ''))->name('logout');
});

require __DIR__.'/auth.php';
