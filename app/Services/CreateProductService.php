<?php

namespace App\Services;

use App\Models\Products;
use Error;

class CreateProductService
{
    public function execute(array $data)
    {
        $productFound = Products::firstWhere('name', $data['name']);

        if (!is_null($productFound)) {
            throw new Error('Product already exists.');
        }

        return Products::create($data);
    }
}
