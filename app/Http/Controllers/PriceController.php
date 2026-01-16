<?php

namespace App\Http\Controllers;

use App\services\PriceService;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    protected PriceService $priceService;

    public function __construct(PriceService $priceService)
    {
        $this->priceService = $priceService;
    }

    public function index(string $category)
    {
        $prices = $this->priceService->getByCategory($category);

        return view('prices.index', [
            'category' => $category,
            'prices' => $prices,
        ]);
    }
}