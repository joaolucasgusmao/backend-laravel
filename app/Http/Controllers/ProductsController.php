<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Services\DestroyProductService;
use App\Services\RetrieveProductService;
use App\Services\StoreProductService;
use App\Services\GetProductsService;
use App\Services\UpdateProductService;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function store(StoreProductRequest $request)
    {
        $storeProductService = new StoreProductService();
        return $storeProductService->execute($request->all());
    }

    public function getProducts()
    {
        $getProductsService = new GetProductsService();
        return $getProductsService->execute();
    }

    public function retrieveProduct($id)
    {
        $retrieveProductService = new RetrieveProductService();
        return $retrieveProductService->execute($id);
    }

    public function update(Request $request, $id)
    {
        $updateProductService = new UpdateProductService();
        return $updateProductService->execute($request->all(), $id);
    }

    public function destroy($id)
    {
        $destroyProductService = new DestroyProductService();
        $destroyProductService->execute($id);
    }
}
