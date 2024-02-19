<?php

use App\Http\Controllers\KasirController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Penjualan
Route::get('/show-penjualan', [KasirController::class, 'indexPenjualan']);
Route::post('/create-penjualan', [KasirController::class, 'createPenjualan']);
Route::put('/edit-penjualan/{id}', [KasirController::class, 'editPenjualan']);
Route::delete('/delete-penjualan/{id}', [KasirController::class, 'deletePenjualan']);

// Produk
Route::get('/show-produk', [KasirController::class, 'indexProduk']);
Route::post('/create-produk', [KasirController::class, 'createProduk']);
Route::put('/edit-produk/{id}', [KasirController::class, 'editProduk']);
Route::delete('/delete-produk/{id}', [KasirController::class, 'deleteProduk']);

// Pelanggan
Route::get('/show-pelanggan', [KasirController::class, 'indexPelanggan']);
Route::post('/create-pelanggan', [KasirController::class, 'createPelanggan']);
Route::put('/edit-pelanggan/{id}', [KasirController::class, 'editPelanggan']);
Route::delete('/delete-pelanggan/{id}', [KasirController::class, 'deletePelanggan']);
