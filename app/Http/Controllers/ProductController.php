<?php

namespace App\Http\Controllers;

use App\Services\ProductService;

class ProductController extends Controller
{
    public function __construct(
        protected ProductService $productService
    ) {}

    public function index(string $category)
    {
        $products = $this->productService->getByCategory($category);

        return view('products.index', compact('category', 'products'));
    }
}