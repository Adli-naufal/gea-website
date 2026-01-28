<div class="overflow-x-auto rounded-xl border border-gray-200 bg-white">
    <table class="min-w-full border-collapse">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-600">
                    Date
                </th>
                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-600">
                    Price / gram
                </th>
                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-600">
                    Source
                </th>
            </tr>
        </thead>

        <tbody class="divide-y divide-gray-200">
            @forelse ($prices as $price)
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 text-sm text-gray-700 whitespace-nowrap">
                        {{ $price->date }}
                    </td>

                    <td class="px-6 py-4 text-sm font-medium text-gray-800 whitespace-nowrap">
                        Rp {{ number_format($price->price_per_gram, 0, ',', '.') }}
                    </td>

                    <td class="px-6 py-4 text-sm text-gray-600 whitespace-nowrap">
                        {{ $price->source }}
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="px-6 py-8 text-center text-sm text-gray-500">
                        Belum ada data harga
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>