<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\MakananController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['guest'])->group(function () {
    Route::get('daftar', [AuthController::class,'daftar'])->name('daftar');
    Route::post('daftar/proses', [AuthController::class,'proses_daftar']);
    Route::get('login', [AuthController::class,'login'])->name('login');
    Route::post('login/proses', [AuthController::class,'proses_login']);
});

Route::get('/', [HomeController::class,'index']);
Route::get('/menu', [HomeController::class,'menu']);
Route::get('/about', [HomeController::class,'about']);
Route::get('/contact', [HomeController::class,'contact']);
Route::get('logout', [AuthController::class,'logout']);

Route::middleware(['auth'])->group(function () {
    Route::get('/keranjang', [KeranjangController::class, 'index']);
    Route::post('/tambah/keranjang', [KeranjangController::class, 'tambah']);
    Route::post('/edit/{id}/keranjang', [KeranjangController::class, 'edit']);
    Route::get('/hapus/{id}/keranjang', [KeranjangController::class, 'hapus']);
    Route::post('/check-out/keranjang', [KeranjangController::class, 'check-out']);
    Route::get('/transaksi', [KeranjangController::class, 'transaksi']);
});

Route::middleware(['auth', 'cekrole:admin'])->group(function () {
    Route::get('admin', [AdminController::class,'index']);

    Route::get('kategori', [CategoryController::class,'index']);
    Route::get('kategori/tambah', [CategoryController::class,'tambah']);
    Route::post('kategori/proses/tambah', [CategoryController::class,'proses_tambah']);
    Route::get('kategori/{id}/edit', [CategoryController::class,'edit']);
    Route::post('kategori/{id}/update', [CategoryController::class,'update']);
    Route::get('kategori/{id}/delete', [CategoryController::class,'delete']);

    Route::get('user', [UserController::class,'index']);
    Route::get('user/tambah', [UserController::class,'tambah']);
    Route::post('user/proses/tambah', [UserController::class,'proses_tambah']);
    Route::get('user/{id}/edit', [UserController::class,'edit']);
    Route::post('user/{id}/update', [UserController::class,'update']);
    Route::get('user/{id}/delete', [UserController::class,'delete']);

    Route::get('makanan', [MakananController::class,'index']);
    Route::get('makanan/tambah', [MakananController::class,'tambah']);
    Route::post('makanan/proses/tambah', [MakananController::class,'proses_tambah']);
    Route::get('makanan/{id}/edit', [MakananController::class,'edit']);
    Route::post('makanan/{id}/update', [MakananController::class,'update']);
    Route::get('makanan/{id}/delete', [MakananController::class,'delete']);

});

