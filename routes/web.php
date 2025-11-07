<?php


// ini import class Route, biar kita bisa pakai fungsi Route::get().
use Illuminate\Support\Facades\Route;

// ini import file controller, biar bisa dipanggil di bawah.
use App\Http\Controllers\BlogController;

Route::get('/', [BlogController::class, 'home']);
Route::get('/product', [BlogController::class, 'product']);
Route::get('/post/{id}', [BlogController::class, 'product_details']);
Route::get('/about', [BlogController::class, 'about']);
// Route::get('/about', [BlogController::class, 'about']);
