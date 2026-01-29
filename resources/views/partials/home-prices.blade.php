<section class="py-12 bg-gray-50 border-y border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

            {{-- Gold --}}
            <div class="rounded-xl border bg-white p-6">
                <p class="text-sm text-gray-500 mb-1">
                    Gold • 1 gram
                </p>
                <p class="text-2xl font-bold text-gray-800">
                    Rp {{ number_format($prices['gold']?->price_per_gram ?? 0) }}
                </p>
            </div>

            {{-- Dinar --}}
            <div class="rounded-xl border bg-white p-6">
                <p class="text-sm text-gray-500 mb-1">
                    Dinar • 1 coin
                </p>
                <p class="text-2xl font-bold text-gray-800">
                    Rp {{ number_format($prices['dinar']?->price_per_gram ?? 0) }}                </p>
            </div>

        </div>
    </div>
</section>