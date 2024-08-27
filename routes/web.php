<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::get('/', function () {
    return view('welcome');
});

// Rota resource para o CRUD de produtos
Route::resource('products', ProductController::class);
