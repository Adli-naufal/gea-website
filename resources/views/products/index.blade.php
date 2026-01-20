@extends('layouts.app')

@section('content')
<h1>Harga {{ ucfirst($category) }}</h1>

<hr>

<ul>
@foreach ($products as $product)
    <li>
        {{ $product->name }} —
        {{ $product->weight }} gram
        <strong>
            Rp {{ number_format($product->price, 0, ',', '.') }}
        </strong>
    </li>
@endforeach
</ul>
@endsection