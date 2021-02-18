<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Untuk menampilkan selamat datang
Route::get('/', [PageController::class, 'index']);

// Menampilkan data diri
Route::get('/about', [PageController::class, 'about']);

// Menambilkan id dari param
Route::get('/articles/{id}', [PageController::class, 'articles']);
