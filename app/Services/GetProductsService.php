<?php

namespace App\Services;

use App\Models\Products;

class GetProductsService
{
    public function execute()
    {
        return Products::all();
    }
}
