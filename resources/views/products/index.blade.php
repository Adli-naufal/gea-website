@extends('layouts.public')

@section('title', ucfirst($category))

@section('content')

<main class="min-h-screen">

    {{-- Page Header --}}
    <section class="border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
            <h1 class="text-3xl md:text-4xl font-bold">
                {{ ucfirst($category) }} Products
            </h1>
            <p class="mt-2 text-gray-600">
                Available {{ $category }} products with transparent pricing and weight details.
            </p>
        </div>
    </section>

    {{-- Product List --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <section class="py-16">

            @if ($products->isEmpty())
                <p class="text-gray-500">
                    No products available at the moment.
                </p>
            @else
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                    @foreach ($products as $product)
                        <div class="rounded-xl border border-gray-200 bg-white p-6 flex flex-col justify-between">

                            {{-- Card Header --}}
                            <div>
                                <h3 class="text-xl font-semibold mb-1">
                                    {{ $product->name }}
                                </h3>
                                <p class="text-sm text-gray-500">
                                    {{ $product->weight }} gram
                                </p>
                            </div>

                            {{-- Card Body --}}
                            <div class="mt-4">
                                <p class="text-lg font-bold text-gray-800">
                                    Rp {{ number_format($product->price, 0, ',', '.') }}
                                </p>
                            </div>

                            {{-- Card Footer --}}
                            <div class="mt-6">
                                <button class="text-sm text-yellow-600 hover:underline">
                                    View details
                                </button>
                            </div>

                        </div>
                    @endforeach

                </div>
            @endif

        </section>
    </div>

</main>

@endsection