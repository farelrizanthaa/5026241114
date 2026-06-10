<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PegawaiController ;
use App\Http\Controllers\BlogController ;
use App\Http\Controllers\PegawaiDBController ;
use App\Http\Controllers\PenggarisController ;
use App\Http\Controllers\BelanjaController ;

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



Route::get('/pegawailama/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);
//blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);



//route CRUD
Route::get('/pegawai',[PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah',[PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store',[PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}',[PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update',[PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}',[PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari',[PegawaiDBController::class, 'cari']);

//route CRUD penggaris
Route::get('/penggaris',[PenggarisController::class, 'index']);
Route::get('/penggaris/tambah',[PenggarisController::class, 'tambah']);
Route::post('/penggaris/store',[PenggarisController::class, 'store']);
Route::get('/penggaris/edit/{id}',[PenggarisController::class, 'edit']);
Route::post('/penggaris/update',[PenggarisController::class, 'update']);
Route::get('/penggaris/hapus/{id}',[PenggarisController::class, 'hapus']);
Route::get('/penggaris/cari',[PenggarisController::class, 'cari']);



//route keranjangbelanja
Route::get('/keranjangbelanja',[BelanjaController::class, 'index']);
Route::get('/keranjangbelanja/tambah',[BelanjaController::class, 'tambah']);
Route::post('/keranjangbelanja/store',[BelanjaController::class, 'store']);
Route::get('/keranjangbelanja/hapus/{id}',[BelanjaController::class, 'hapus']);
