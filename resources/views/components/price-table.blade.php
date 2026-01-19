<table class="table table-bordered">
    <thead>
        <tr>
            <th>Tanggal</th>
            <th>Harga / gram</th>
            <th>Sumber</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($prices as $price)
            <tr>
                <td>{{ $price->date }}</td>
                <td>
                    Rp {{ number_format($price->price_per_gram, 0, ',', '.') }}
                </td>
                <td>{{ $price->source }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="3" class="text-center text-muted">
                    Belum ada data harga
                </td>
            </tr>
        @endforelse
    </tbody>
</table>