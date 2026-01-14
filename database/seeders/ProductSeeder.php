<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::insert([
            [
                'name' => 'Gold 1 Gram',
                'category' => 'gold',
                'weight' => 1,
                'price' => null,
            ],
            [
                'name' => 'Gold 5 Gram',
                'category' => 'gold',
                'weight' => 5,
                'price' => null,
            ],
            [
                'name' => 'Dinar 1',
                'category' => 'dinar',
                'weight' => 4.25,
                'price' => null,
            ],
        ]);
    }
}