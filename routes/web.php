<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('landing.layout');
// });

Route::get('/', [WebsiteController::class, "index"]);

Route::get('/about', [WebsiteController::class, 'about']);

Route::get('/blogs', [WebsiteController::class, 'blog']);
Route::get('/blogs/{slug}', [WebsiteController::class, 'detail_blog']);

Route::get('/product', [WebsiteController::class, 'product']);

Route::get('/contact', [WebsiteController::class, "contact"]);

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::resource('data-blogs', BlogController::class)->except(['show']);

Route::resource('data-product', ProdukController::class)->middleware('role:super-admin');

Route::resource('users', UsersController::class);

Route::get('/login', [AuthController::class, 'index']);

Route::post('/auth', [AuthController::class, 'auth'])->name("login");
