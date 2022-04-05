<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\SatuanController;
use App\Http\Controllers\DataController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('/layouts/dashboard', [
    "title" => "Home"   
    ]);
});

Route::get('/produk-kategori', [KategoriController::class, 'index']);
Route::get('/produk', [SatuanController::class, 'index']);
Route::get('/produk', [DataController::class, 'index']);
