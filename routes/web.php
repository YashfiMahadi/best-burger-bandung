<?php

use App\Http\Controllers\AuthController;
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
