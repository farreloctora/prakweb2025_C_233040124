<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\DashboardPostController;
Use App\Http\Controllers\RegisterController;
Use App\Http\Controllers\LoginController;

Route::get('/posts', [PostController::class, 'index'])->middleware('auth')->name('posts.index');
Route::get('/posts/{post:slug}', [PostController::class, 'show'])->name('posts.show');
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->middleware('guest')->name('register');
Route::post('/register', [RegisterController::class, 'register'])->middleware('guest');

Route::get('/login', [LoginController::class, 'showLoginForm'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'login'])->middleware('guest');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/dashboard', [DashboardPostController::class, 'index'])->middleware(['auth'], ['verified'])->name('dashboard.index');

Route::get('/dashboard/create', [DashboardPostController::class, 'create'])->middleware(['auth'], ['verified'])->name('dashboard.create');

Route::post('/dashboard', [DashboardPostController::class, 'store'])->middleware(['auth'], ['verified'])->name('dashboard.store');

Route::get('/dashboard/{post:slug}/edit', [DashboardPostController::class, 'show'])->middleware(['auth'], ['verified'])->name('dashboard.show');