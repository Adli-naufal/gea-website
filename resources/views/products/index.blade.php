@extends('layouts.app')

@section('content')
<h1>{{ $title }}</h1>

@if ($latestPrice)
    <p>
        Reference price ({{ $latestPrice->source }}):
        <strong>Rp {{ number_format($latestPrice->price_per_gram) }} / gram</strong>
    </p>
@endif

<hr>

<ul>
@foreach ($products as $product)
    <li>
        {{ $product->name }} —
        {{ $product->weight }} gram
    </li>
@endforeach
</ul>
@endsection