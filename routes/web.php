<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\AchievementController;
use App\Http\Controllers\Admin\ArticleController as AdminArticleController;
use App\Http\Controllers\Admin\RegistrationController as AdminRegistrationController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\VerificationController;

// Public Routes
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/programs', [PageController::class, 'programs'])->name('programs');
Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery');
Route::get('/achievements', [PageController::class, 'achievements'])->name('achievements');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [PageController::class, 'submitContact'])->name('contact.submit');

Route::get('/pendaftaran', [RegistrationController::class, 'create'])->name('register');
Route::post('/pendaftaran', [RegistrationController::class, 'store'])->name('register.store');

Route::get('/berita', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/berita/{slug}', [ArticleController::class, 'show'])->name('articles.show');

Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['id', 'ja'])) {
        session()->put('locale', $locale);
    }
    return redirect()->back();
})->name('lang.switch');

// Auth Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login'])->name('login.post')->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

// Email Verification Routes
Route::get('/email/verify', [VerificationController::class, 'notice'])->middleware('auth')->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->middleware(['auth', 'signed'])->name('verification.verify');
Route::post('/email/verification-notification', [VerificationController::class, 'send'])->middleware(['auth', 'throttle:6,1'])->name('verification.send');

// Admin Routes (Proteksi dengan Auth & Verified)
Route::prefix('admin')->name('admin.')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/', function () {
        return redirect()->route('admin.dashboard');
    })->name('index');
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::resource('gallery', GalleryController::class);
    Route::resource('achievements', AchievementController::class);
    Route::resource('articles', AdminArticleController::class);
    Route::get('registrations', [AdminRegistrationController::class, 'index'])->name('registrations.index');
    Route::delete('registrations/{registration}', [AdminRegistrationController::class, 'destroy'])->name('registrations.destroy');

    Route::get('contacts', [\App\Http\Controllers\Admin\ContactController::class, 'index'])->name('contacts.index');
    Route::delete('contacts/{contact}', [\App\Http\Controllers\Admin\ContactController::class, 'destroy'])->name('contacts.destroy');
});
