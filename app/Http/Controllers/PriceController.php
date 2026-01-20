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
        $referencePrice = $this->priceService->getReferencePrice($category);

        return view('prices.index', compact(
            'category',
            'prices',
            'referencePrice'
        ));
    }

}