@extends('layouts.app')

@section('content')
<h1>Reference Prices – {{ ucfirst($category) }}</h1>

<ul>
@foreach ($prices as $price)
    <li>
        {{ $price->date }} —
        Rp {{ number_format($price->price_per_gram, 0, ',', '.') }}
        ({{ $price->source }})
        <a href="/admin/prices/{{ $price->id }}/edit">Edit</a>
    </li>
@endforeach
</ul>
@endsection