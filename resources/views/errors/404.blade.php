@extends('layouts.public')

@section('title', 'Page Not Found')

@section('content')
<div class="text-center py-5">
    <h1 class="display-6 mb-3">404</h1>
    <p class="text-muted mb-4">
        The page you are looking for does not exist.
    </p>

    <a href="{{ url('/') }}" class="btn btn-outline-dark">
        Back to Home
    </a>
</div>
@endsection