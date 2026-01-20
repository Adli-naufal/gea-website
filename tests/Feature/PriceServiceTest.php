<?php

namespace Tests\Feature;

use App\Models\Price;
use App\Services\PriceService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PriceServiceTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_returns_latest_reference_price_by_category()
    {
        Price::create([
            'category' => 'gold',
            'date' => now()->subDay(),
            'price_per_gram' => 1000000,
            'source' => 'Old Source',
        ]);

        $latest = Price::create([
            'category' => 'gold',
            'date' => now(),
            'price_per_gram' => 1200000,
            'source' => 'Antam',
        ]);

        $service = app(PriceService::class);

        $result = $service->getReferencePrice('gold');

        $this->assertNotNull($result);
        $this->assertEquals($latest->id, $result->id);
    }
}