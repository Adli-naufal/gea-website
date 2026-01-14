<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Price;

class PriceSeeder extends Seeder
{
    public function run(): void
    {
        Price::insert([
            [
                'category' => 'gold',
                'price_per_gram' => 1200000,
                'source' => 'Antam',
                'date' => now()->toDateString(),
            ],
            [
                'category' => 'dinar',
                'price_per_gram' => 1250000,
                'source' => 'World Gold Council',
                'date' => now()->toDateString(),
            ],
        ]);
    }
}