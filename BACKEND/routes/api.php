<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KeranjangController;
use App\Models\Produks;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\PrintController;

Route::middleware('auth:sanctum')->group(function () {
    
  
    Route::get('/prints', [PrintController::class, 'index']);
    Route::post('/prints', [PrintController::class, 'store']);
    Route::get('/prints/{id}', [PrintController::class, 'show']);
    Route::post('/prints/{id}/batal', [PrintController::class, 'batal']);
});


Route::middleware('auth:sanctum','admin')->group(function () {
    Route::get('/admin/prints', [PrintController::class, 'index']);
  Route::get('/admin/prints', [PrintController::class, 'adminIndex']);
    Route::post('/admin/prints/{id}/konfirmasi-pembatalan', [PrintController::class, 'konfirmasiPembatalan']);
    Route::put('/admin/prints/{id}/status', [PrintController::class, 'updateStatus']);
    Route::delete('/admin/prints/{id}', [PrintController::class, 'destroy']);


});

// Route public tanpa auth
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login'])->name('Login');

// Routes untuk user yang sudah login (auth:sanctum)
Route::middleware('auth:sanctum')->group(function () {
    // Pesanan userRoute::delete('/pesanans/{id}', [PesananController::class, 'destroy']);

    Route::get('/pesanans', [PesananController::class, 'index']);
    Route::get('/pesanans/{id}', [PesananController::class, 'show']);
    Route::post('/pesanans', [PesananController::class, 'store']);
  

    // Batal pesanan (hanya user yang login)
    Route::post('/pesanans/{id}/batal', [PesananController::class, 'batal']);

    // Keranjang
    Route::get('/keranjangs', [KeranjangController::class, 'index']);
    Route::post('/keranjangs', [KeranjangController::class, 'store']);
    Route::put('/keranjangs/{id}', [KeranjangController::class, 'update']);
    Route::delete('/keranjangs/{id}', [KeranjangController::class, 'destroy']);

    // Produk
    Route::get('/produks', [ProdukController::class, 'index']);
    Route::get('/produks/{id}', [ProdukController::class, 'show']);
    Route::get('/produkstok', fn () => Produks::with('ukurans')->get());
    Route::get('/produkstok/{id}', [ProdukController::class, 'show']);
    Route::put('/produkstok/{id}', [ProdukController::class, 'update']);

    // Mark pesanan selesai (bisa admin atau user khusus)
    Route::put('/admin/pesanans/{id}/selesai', [PesananController::class, 'markAsCompleted']);
     Route::put('/admin/prints/{id}/selesai', [PrintController::class, 'markAsCompleted']);
    Route::put('/pesanan/selesaikan-banyak', [PesananController::class, 'completeMultiple']);
    Route::delete('/admin/pesanans/{id}', [PesananController::class, 'destroy']);

    Route::post('/admin/pesanans/{id}/batal', [PesananController::class, 'adminBatal']);
    Route::post('/admin/print/{id}/batal', [PrintController::class, 'adminBatal']);


    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index']);

    // User info & logout
    Route::get('/users', [AuthController::class, 'users']);
    Route::post('/logout', [AuthController::class, 'logout']);
});

// Routes khusus admin (auth:sanctum + admin middleware)
Route::middleware(['auth:sanctum', 'admin'])->group(function () {
    Route::get('/admin/pesanans', [PesananController::class, 'adminIndex']);
    Route::post('/admin/pesanans/{id}/konfirmasi-pembatalan', [PesananController::class, 'konfirmasiPembatalan']);
    Route::put('/admin/pesanans/{id}/status', [PesananController::class, 'updateStatus']);

    // Manajemen user admin
    Route::get('/admin/users', [UserController::class, 'index']);
    Route::delete('/admin/users/{id}', [UserController::class, 'destroy']);
    Route::put('/admin/users/{id}', [AuthController::class, 'updateUser']);
    Route::put('/admin/users/{id}/reset-password', [AuthController::class, 'resetPassword']);
});

// Route reset password user (public)
Route::post('/users/{id}/reset-password', [UserController::class, 'resetPassword']);
