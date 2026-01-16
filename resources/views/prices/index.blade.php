@extends('layouts.app')

@section('content')
<section class="container py-5">

    <h1 class="mb-4">
        Harga {{ ucfirst($category) }}
    </h1>

    @include('prices.partials.table', ['prices' => $prices])

</section>
@endsection