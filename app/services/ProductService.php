<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Support\Facades\Cache;

class ProductService
{
    public function getByCategory(string $category)
    {
        return Cache::remember(
            "products:list:$category",
            now()->addMinutes(30),
            fn () => Product::where('category', $category)
                // remove is_active filter entirely
                ->orderBy('weight')
                ->get()
        );
    }

    public function clearCache(string $category): void
    {
        Cache::forget("products:list:$category");
    }

}