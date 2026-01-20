<?php

namespace Tests\Feature;

use App\Models\Product;
use App\Services\ProductService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use illuminate\Support\Facades\Cache;
use Tests\TestCase;

class ProductServiceTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_returns_products_by_category_ordered_by_weight()
    {
        Cache::flush();

        Product::create([
            'name' => 'Gold 5g',
            'category' => 'gold',
            'weight' => 5,
            'price' => 5000000,
        ]);

        $lighter = Product::create([
            'name' => 'Gold 1g',
            'category' => 'gold',
            'weight' => 1,
            'price' => 1200000,
        ]);

        $service = app(ProductService::class);

        $products = $service->getByCategory('gold');

        $this->assertCount(2, $products);
        $this->assertEquals($lighter->id, $products->first()->id);
    }
}