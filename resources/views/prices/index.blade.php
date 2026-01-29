@extends('layouts.public')

@section('title', ucfirst($category) . ' Prices')

@section('content')

    {{-- Page Header --}}
    <section class="border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
            <h1 class="text-3xl md:text-4xl font-bold">
                {{ ucfirst($category) }} Prices
            </h1>
            <p class="mt-2 text-gray-600">
                Reference and historical prices for {{ $category }} based on trusted sources.
            </p>
        </div>
    </section>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- ✅ Reference Price (partial) --}}
        @include('partials.reference-price')

        {{-- Price History --}}
        <section class="py-16">
            <h2 class="text-2xl font-semibold mb-6">
                Price History
            </h2>

            <x-price-table :prices="$prices" />
        </section>

    </div>

@endsection