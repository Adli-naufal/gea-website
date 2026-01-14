@extends('layouts.public')

@section('title', 'Gold Prices')

@section('content')
<h1 class="mb-4">{{ $title }}</h1>

<h4>Gold Products</h4>
<ul class="list-group mb-4">
    @foreach ($products as $product)
        <li class="list-group-item d-flex justify-content-between">
            <span>{{ $product->name }}</span>
            <strong>Rp {{ number_format($product->buy_price) }}</strong>
        </li>
    @endforeach
</ul>

<div class="alert alert-warning mt-5">
    <small>
        Prices shown are for informational purposes only and may change
        without prior notice. Please confirm availability and final pricing
        directly with us.
    </small>
</div>

@endsection