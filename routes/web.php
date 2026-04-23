<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang</h1> di tutorial laravel <u>www.malasngoding.com</u>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);


Route::get('/', [PageController::class, 'menu']);
Route::get('welcome', [PageController::class, 'welcome']);
Route::get('blog', [PageController::class, 'blog']);
Route::get('index', [PageController::class, 'index']);
Route::get('intro', [PageController::class, 'intro']);
Route::get('linktree', [PageController::class, 'linktree']);
Route::get('makeover-instagram', [PageController::class, 'makeoverInstagram']);
Route::get('news', [PageController::class, 'news']);
Route::get('pertemuan4', [PageController::class, 'pertemuan4']);
Route::get('pertemuan5', [PageController::class, 'pertemuan5']);
Route::get('responsive', [PageController::class, 'responsive']);
Route::get('template', [PageController::class, 'template']);
