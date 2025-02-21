<?php

namespace App\Services;

use App\Exceptions\AppError;
use App\Models\Products;

class RetrieveProductService
{
    public function execute($id)
    {
        $product = Products::find($id);

        if (is_null($product)) {
            throw new AppError("Product not found.", 404);
        }
        return $product;
    }
}