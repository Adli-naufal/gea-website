<h1>{{ $title }}</h1>

@if ($latestPrice)
    <p class="text-muted">
        Harga referensi:
        <strong>
            Rp {{ number_format($latestPrice->price_per_gram) }}
        </strong>
        / gram
        <br>
        <small>
            Sumber: {{ $latestPrice->source }} —
            {{ $latestPrice->date }}
        </small>
    </p>
@else
    <p class="text-muted">
        *Harga bersifat referensi dan bukan transaksi jual beli online.
    </p>
@endif
