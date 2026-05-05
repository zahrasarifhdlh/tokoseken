<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Route::get('/', function () {
//     return view('produk.beranda',[
//         "judul" => "List baju",
//         "baju" => "Kaos",
//         "harga" => "Rp. 35.000",
//         "warna" => "Hitam",
//     ]);
// });

Route::get('/beranda', [ProductController::class, 'index']);
Route::get('/welcome', function() {
    return view('welcome');
});

Route::get('/beranda/tambah', [ProductController::class, 'tambah']);
Route::post('/beranda/store', [ProductController::class, 'store']);


