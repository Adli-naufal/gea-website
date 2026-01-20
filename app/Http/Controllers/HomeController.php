<?php

namespace App\Http\Controllers;

use App\Services\PriceService;

class HomeController extends Controller
{
    public function index(PriceService $priceService)
    {
        $prices = $priceService->getLatestForHomepage();

        return view('home', compact('prices'));
    }
}