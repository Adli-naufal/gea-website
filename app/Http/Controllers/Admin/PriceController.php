<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Price;
use App\Services\PriceService;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function index(string $category)
    {
        $prices = Price::where('category', $category)
            ->orderByDesc('date')
            ->get();

        return view('admin.prices.index', compact('category', 'prices'));
    }

    public function edit(Price $price)
    {
        return view('admin.prices.edit', compact('price'));
    }

    public function update(
        Request $request,
        Price $price,
        PriceService $priceService
    ) {
        $validated = $request->validate([
            'price_per_gram' => 'required|numeric|min:0',
            'source' => 'required|string',
            'date' => 'required|date',
        ]);

        $price->update($validated);

        // 🔥 invalidate reference price cache
        $priceService->clearCache($price->category);

        return redirect()
            ->to("/admin/prices/{$price->category}")
            ->with('success', 'Reference price updated');
    }
}