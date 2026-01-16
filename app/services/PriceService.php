<?php

namespace App\Services;

use App\Models\Price;

class PriceService
{
    public function getByCategory(string $category)
    {
        return Price::where('category', $category)
            ->orderBy('date', 'desc')
            ->get();
    }
}