<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Price;

class ProductController extends Controller
{
    public function index(string $category)
    {
        // 1. Products (static offerings)
        $products = Product::where('category', $category)->get();

        // 2. Latest price reference
        $latestPrice = Price::where('category', $category)
            ->orderByDesc('date')
            ->first();

        return view('products.index', [
            'title' => ucfirst($category),
            'products' => $products,
            'latestPrice' => $latestPrice,
        ]);
    }
}