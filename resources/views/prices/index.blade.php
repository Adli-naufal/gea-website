@extends('layouts.public')

@section('title', ucfirst($category) . ' Prices')

@section('content')

<main class="min-h-screen">

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

    {{-- Page Content --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Reference Price --}}
        @if ($referencePrice)
            <section class="py-16">
                <div class="rounded-xl border border-gray-200 bg-white p-6 max-w-md">
                    <p class="text-sm text-gray-500 mb-1">
                        Latest reference price
                        <span class="block">
                            Source: {{ $referencePrice->source }}
                        </span>
                    </p>

                    <p class="text-2xl font-bold text-gray-800">
                        Rp {{ number_format($referencePrice->price_per_gram, 0, ',', '.') }}
                        <span class="text-base font-medium text-gray-500">
                            / gram
                        </span>
                    </p>
                </div>
            </section>
        @endif

        {{-- Price History --}}
        <section class="py-16">
            <h2 class="text-2xl font-semibold mb-6">
                Price History
            </h2>

            <x-price-table :prices="$prices" />
        </section>

    </div>

</main>

@endsection