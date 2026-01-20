<?php

namespace Tests\Feature;

use App\Models\Price;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function the_application_returns_a_successful_response()
    {
        Price::create([
            'category' => 'gold',
            'date' => now(),
            'price_per_gram' => 1200000,
            'source' => 'Antam',
        ]);

        Price::create([
            'category' => 'dinar',
            'date' => now(),
            'price_per_gram' => 1250000,
            'source' => 'WGC',
        ]);

        $response = $this->get('/');

        $response->assertStatus(200);
    }
}