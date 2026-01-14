    @extends('layouts.public')

    @section('title', 'Dinar Prices')

    @section('content')
    <h1 class="mb-4">{{ $title }}</h1>

    <ul class="list-group mb-4">
        @foreach ($products as $product)
            <li class="list-group-item d-flex justify-content-between">
                <span>{{ $product->name }}</span>
                <strong>Rp {{ number_format($product->buy_price) }}</strong>
            </li>
        @endforeach
    </ul>

    <div class="alert alert-warning">
        <small>
            Prices shown are for informational purposes only and may change
            without prior notice. Please confirm availability and final pricing
            directly with us.
        </small>
    </div>
    @endsection