@extends('layouts.app')

@section('content')
<h1>Edit Reference Price</h1>

<form method="POST" action="/admin/prices/{{ $price->id }}">
    @csrf

    <label>Date</label>
    <input type="date" name="date" value="{{ $price->date }}">

    <label>Price / gram</label>
    <input type="number" name="price_per_gram" value="{{ $price->price_per_gram }}">

    <label>Source</label>
    <input type="text" name="source" value="{{ $price->source }}">

    <button type="submit">Save</button>
</form>
@endsection