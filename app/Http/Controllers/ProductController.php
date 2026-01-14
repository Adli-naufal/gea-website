<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Price;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($category)
    {
        if (!in_array($category, ['gold', 'dinar'])) {
            abort(404);
        }

        $products = Product::where('category', $category)->get();

        $latestPrice = Price::where('category', $category)
            ->orderBy('date', 'desc')
            ->first();

        return view('products.index', [
            'title' => ucfirst($category),
            'products' => $products,
            'latestPrice' => $latestPrice
        ]);
    }
}
