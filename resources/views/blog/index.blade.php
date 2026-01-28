@extends('layouts.public')

@section('title', 'Blog')

@section('content')

<main class="min-h-screen">

    {{-- Page Header --}}
    <section class="border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
            <h1 class="text-3xl md:text-4xl font-bold">
                Blog
            </h1>
            <p class="mt-2 text-gray-600">
                Articles and insights related to gold, dinar, and long-term value.
            </p>
        </div>
    </section>

    {{-- Page Content --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <section class="py-16">
            <div class="max-w-2xl">
                <p class="text-base leading-relaxed text-gray-700 mb-4">
                    We are currently preparing articles focused on long-term value,
                    gold ownership, and responsible wealth preservation.
                </p>

                <p class="text-sm text-gray-500">
                    Content coming soon.
                </p>
            </div>
        </section>

    </div>
</main>

@endsection