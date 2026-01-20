<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Services\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('weight')->get();

        return view('admin.gold.index', compact('products'));
    }

    public function edit(Product $product)
    {
        return view('admin.gold.edit', compact('product'));
    }

    public function update(
        Request $request,
        Product $product,
        ProductService $productService
    ) {
        $validated = $request->validate([
            'price' => 'required|numeric|min:0',
            'is_active' => 'sometimes|boolean',
        ]);


        $product->update([
            'price' => $validated['price'],
            'is_active' => $request->has('is_active')
        ]);


        // 🔥 invalidate cache
        $productService->clearCache($product->category);

        return redirect('/admin/gold')->with('success', 'Price updated');
    }
}