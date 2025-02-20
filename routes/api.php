<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

Route::get("/products", [ProductsController::class, "getProducts"]);
Route::post('/products', [ProductsController::class, 'store']);
