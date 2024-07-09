<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
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

Route::get('login', [AuthController::class,'login'])->name('login');
Route::post('login/proses', [AuthController::class,'proses_login']);

Route::get('logout', [AuthController::class,'logout']);
Route::get('admin', [HomeController::class,'index']);

Route::get('kategori', [CategoryController::class,'index']);
Route::get('kategori/tambah', [CategoryController::class,'tambah']);
Route::post('kategori/proses/tambah', [CategoryController::class,'proses_tambah']);
Route::get('kategori/{id}/edit', [CategoryController::class,'edit']);
Route::post('kategori/{id}/update', [CategoryController::class,'update']);
Route::get('kategori/{id}/delete', [CategoryController::class,'delete']);

Route::get('user', [CategoryController::class,'index']);
Route::get('user/tambah', [CategoryController::class,'tambah']);
Route::post('user/proses/tambah', [CategoryController::class,'proses_tambah']);
Route::get('user/{id}/edit', [CategoryController::class,'edit']);
Route::post('user/{id}/update', [CategoryController::class,'update']);
Route::get('user/{id}/delete', [CategoryController::class,'delete']);
