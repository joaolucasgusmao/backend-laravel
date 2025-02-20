<?php

namespace App\Services;

use App\Exceptions\AppError;
use App\Models\Products;

class CreateProductService
{
    public function execute(array $data)
    {
        $productFound = Products::firstWhere('name', $data['name']);

        if (!is_null($productFound)) {
            throw new AppError('Product already exists.', 400);
        }

        return Products::create($data);
    }
}
