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

    public function clearCache(string $category): void
    {
        Cache::forget("prices:list:$category");
        Cache::forget("prices:reference:$category");
        Cache::forget('prices:homepage');
    }

    public function getLatestForHomepage(): array
    {
        return Cache::remember(
            'prices:homepage',
            now()->addMinutes(30),
            function () {
                return [
                    'gold' => $this->getReferencePrice('gold'),
                    'dinar' => $this->getReferencePrice('dinar'),
                ];
            }
        );
    }
}
