<?php

namespace App\Services;

use App\Models\Price;
use Illuminate\Support\Facades\Cache;

class PriceService
{
    public function getByCategory(string $category)
    {
        return Cache::remember(
            "prices:list:$category",
            now()->addMinutes(30),
            fn () => Price::where('category', $category)
                ->orderByDesc('date')
                ->get()
        );
    }

    public function getReferencePrice(string $category): ?Price
    {
        return Cache::remember(
            "prices:reference:$category",
            now()->addMinutes(30),
            fn () => Price::where('category', $category)
                ->orderByDesc('date')
                ->first()
        );
    }

}
