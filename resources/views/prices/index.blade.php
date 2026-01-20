@extends('layouts.app')

@section('content')
<section class="container py-5">

    <h1 class="mb-3">
        Harga {{ ucfirst($category) }}
    </h1>

    @if ($referencePrice)
        <p class="text-muted">
            Reference price ({{ $referencePrice->source }}):
            <strong>
                Rp {{ number_format($referencePrice->price_per_gram, 0, ',', '.') }} / gram
            </strong>
        </p>
    @endif

<x-price-table :prices="$prices" />


</section>
@endsection