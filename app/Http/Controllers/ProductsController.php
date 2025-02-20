<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Services\CreateProductService;
use App\Services\GetProductsService;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function getProducts(Request $request)
    {
        $getProductsService = new GetProductsService();
        return $getProductsService->execute($request->all());
    }

    public function store(Request $request)
    {
        $createProductService = new CreateProductService();
        return $createProductService->execute($request->all());
    }
}
