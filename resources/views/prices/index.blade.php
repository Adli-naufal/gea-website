<h1>{{ $title }}</h1>

@forelse ($prices as $price)
    <div class="mb-2">
        <strong>
            Rp {{ number_format($price->price_per_gram) }}
        </strong>
        <small class="text-muted">
            ({{ $price->source }} - {{ $price->date }})
        </small>
    </div>
@empty
    <p class="text-muted">Belum ada data harga.</p>
@endforelse