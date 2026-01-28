@extends('layouts.public')

@section('title', 'Custom Gold')

@section('content')

<main class="min-h-screen">

    {{-- Page Header --}}
    <section class="border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
            <h1 class="text-3xl md:text-4xl font-bold">
                Custom Gold
            </h1>
            <p class="mt-2 text-gray-600">
                Bespoke gold products tailored to your needs and long-term goals.
            </p>
        </div>
    </section>

    {{-- Page Content --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Introduction --}}
        <section class="py-16 max-w-3xl">
            <p class="text-base leading-relaxed text-gray-700 mb-4">
                We offer custom-made gold products designed according to your
                specific requirements. This service is suitable for special
                occasions, long-term investment, or unique design requests.
            </p>

            <p class="text-base leading-relaxed text-gray-700">
                Each custom order is handled through direct consultation to
                ensure clarity, transparency, and trust.
            </p>
        </section>

        {{-- Portfolio --}}
        <section class="py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                <h2 class="text-2xl font-semibold mb-6">
                    Custom Gold Portfolio
                </h2>

                <p class="text-sm text-gray-600 mb-10 max-w-2xl">
                    A selection of custom gold products we have crafted based on
                    client requirements and long-term value considerations.
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                    {{-- Portfolio Item --}}
                    <div class="rounded-xl border border-gray-200 bg-white overflow-hidden">
                        <div class="aspect-square bg-gray-100">
                            <img
                                src="/images/custom-gold/sample-1.jpg"
                                alt="Custom gold bar"
                                class="h-full w-full object-cover"
                            >
                        </div>
                        <div class="p-4">
                            <h3 class="text-base font-semibold mb-1">
                                Custom Gold Bar
                            </h3>
                            <p class="text-sm text-gray-600">
                                Made-to-order gold bar with specific weight and purity.
                            </p>
                        </div>
                    </div>

                    {{-- Portfolio Item --}}
                    <div class="rounded-xl border border-gray-200 bg-white overflow-hidden">
                        <div class="aspect-square bg-gray-100">
                            <img
                                src="/images/custom-gold/sample-2.jpg"
                                alt="Custom gold coin"
                                class="h-full w-full object-cover"
                            >
                        </div>
                        <div class="p-4">
                            <h3 class="text-base font-semibold mb-1">
                                Custom Gold Coin
                            </h3>
                            <p class="text-sm text-gray-600">
                                Limited-run gold coin for private collection.
                            </p>
                        </div>
                    </div>

                    {{-- Portfolio Item --}}
                    <div class="rounded-xl border border-gray-200 bg-white overflow-hidden">
                        <div class="aspect-square bg-gray-100">
                            <img
                                src="/images/custom-gold/sample-3.jpg"
                                alt="Custom gold gift"
                                class="h-full w-full object-cover"
                            >
                        </div>
                        <div class="p-4">
                            <h3 class="text-base font-semibold mb-1">
                                Custom Gold Gift
                            </h3>
                            <p class="text-sm text-gray-600">
                                Gold product prepared for special occasions.
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        {{-- Important Notes --}}
        <section class="py-16">
            <div class="rounded-xl border border-gray-200 bg-gray-50 p-6 max-w-3xl">
                <h2 class="text-lg font-semibold mb-4">
                    Important Information
                </h2>

                <ul class="list-disc list-inside text-sm text-gray-700 space-y-2">
                    <li>Prices vary depending on weight, purity, and design</li>
                    <li>All custom orders require consultation</li>
                    <li>No instant pricing is available on the website</li>
                </ul>
            </div>
        </section>

        {{-- Call to Action --}}
        <section class="py-16 max-w-3xl">
            <p class="text-sm text-gray-500 mb-4">
                To discuss a custom gold request, please contact us directly via WhatsApp.
            </p>

            <a
                href="https://wa.me/6281254545654?text=Hello%20GEA,%20I%20would%20like%20to%20inquire%20about%20custom%20gold%20products."
                target="_blank"
                rel="noopener"
                class="inline-flex items-center justify-center rounded-lg bg-yellow-600 px-6 py-3 text-white font-medium hover:bg-yellow-700 transition"
            >
                Order via WhatsApp
            </a>
        </section>

    </div>

</main>

@endsection