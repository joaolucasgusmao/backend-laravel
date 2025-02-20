<?php

namespace App\Services;

use App\Exceptions\AppError;
use App\Models\Products;

class UpdateProductService
{
    public function execute(array $data, $id)
    {
        $productToUpdate = Products::find($id);

        if (is_null($productToUpdate)) {
            throw new AppError('Product not found.', 404);
        }

        $productToUpdate->update($data);

        return $productToUpdate;
    }
}
