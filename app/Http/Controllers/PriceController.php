<?php

namespace App\Http\Controllers;

use App\Models\Price;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function index($category)
    {
        if (!in_array($category, ['gold', 'dinar'])) {
            abort(404);
        }

        $prices = Price::where('category', $category)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('prices.index', [
            'title' => 'Harga ' . ucfirst($category),
            'prices' => $prices
        ]);
    }
}