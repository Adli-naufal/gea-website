@extends('layouts.app')

@section('content')
<h1>GEA</h1>

<section>
    <h2>Reference Prices</h2>

    @foreach (['gold', 'dinar'] as $type)
        @php $price = $prices[$type] ?? null; @endphp

        @if ($price)
            <div>
                <strong>{{ ucfirst($type) }}</strong><br>
                Rp {{ number_format($price->price_per_gram, 0, ',', '.') }} / gram<br>
                <small>{{ $price->source }} — {{ $price->date }}</small>
            </div>
            <hr>
        @endif
    @endforeach
</section>
@endsection