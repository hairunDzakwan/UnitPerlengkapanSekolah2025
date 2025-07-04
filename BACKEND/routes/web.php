<?php

use Illuminate\Support\Facades\Route;
use App\Models\Pesanans;

Route::get('/tes-relasi-pesanan', function () {
    $pesanan = Pesanans::with('user')->first();
    dd($pesanan);
});

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


Route::get('/', function () {
    return view('welcome');
});
