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