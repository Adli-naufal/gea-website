@extends('layouts.public')

@section('title', 'About Us')

@section('content')

<main class="min-h-screen">
    {{-- Page Header --}}
    <section class="border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
            <h1 class="text-3xl md:text-4xl font-bold">
                About GEA
            </h1>
            <p class="mt-2 text-gray-600">
                Building trust through clarity, stability, and transparency in gold ownership.
            </p>
        </div>
    </section>

    {{-- Page Content --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Who We Are --}}
        <section class="py-16">
            <h2 class="text-2xl font-semibold mb-4">
                Who We Are
            </h2>

            <p class="text-base leading-relaxed text-gray-700 mb-4">
                GEA is focused on providing reliable gold and dinar products
                for individuals who value long-term preservation of wealth.
            </p>

            <p class="text-base leading-relaxed text-gray-700">
                We believe gold is not about speculation, but about stability,
                transparency, and trust.
            </p>
        </section>

        {{-- What We Do --}}
        <section class="py-16">
            <h2 class="text-2xl font-semibold mb-4">
                What We Do
            </h2>

            <ul class="list-disc list-inside text-base text-gray-700 space-y-2">
                <li>Gold and dinar product information</li>
                <li>Transparent pricing reference</li>
                <li>Custom gold consultation</li>
            </ul>
        </section>

        {{-- What We Don’t Do --}}
        <section class="py-16">
            <h2 class="text-2xl font-semibold mb-4">
                What We Don’t Do
            </h2>

            <ul class="list-disc list-inside text-base text-gray-700 space-y-2">
                <li>Short-term trading or speculation</li>
                <li>Hidden fees or unclear pricing</li>
                <li>Unverified product claims</li>
            </ul>

            <p class="mt-6 text-sm text-gray-500">
                GEA operates with clarity and responsibility, ensuring every
                interaction is grounded in trust.
            </p>
        </section>

    </div>
</main>

@endsection