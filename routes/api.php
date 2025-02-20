<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

Route::post('/products', [ProductsController::class, 'store']);
Route::get("/products", [ProductsController::class, "getProducts"]);
Route::patch('/products/{id}', [ProductsController::class, 'update']);
Route::delete('/products/{id}', [ProductsController::class, 'destroy']);
