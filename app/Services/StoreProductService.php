<?php

namespace App\Services;

use App\Exceptions\AppError;
use App\Models\Products;

class StoreProductService
{
    public function execute(array $data)
    {
        $productFound = Products::firstWhere('name', $data['name']);
        $imageFound = Products::firstWhere('image', $data['image']);

        if (!is_null($productFound)) {
            throw new AppError('Product already exists.', 400);
        }

        if (!is_null($imageFound)) {
            throw new AppError('Image already exists.', 400);
        }

        return Products::create($data);
    }
}
