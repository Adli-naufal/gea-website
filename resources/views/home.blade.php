@extends('layouts.public')

@section('title', 'Home')

@section('content')
    {{-- ✅ Home Prices (partial) --}}
    @include('partials.home-prices')
@endsection