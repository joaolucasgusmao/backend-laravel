<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Services\StoreProductService;
use App\Services\GetProductsService;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function getProducts(Request $request)
    {
        $getProductsService = new GetProductsService();
        return $getProductsService->execute($request->all());
    }

    public function store(StoreProductRequest $request)
    {
        $storeProductService = new StoreProductService();
        return $storeProductService->execute($request->all());
    }
}
