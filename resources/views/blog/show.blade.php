@extends('layouts.public')

@section('title', $post->title)

@section('content')
<div class="max-w-3xl mx-auto px-4 py-10">
    <h1 class="text-3xl font-bold mb-4">
        {{ $post->title }}
    </h1>

    <p class="text-sm text-gray-500 mb-6">
        {{ $post->created_at->format('d M Y') }}
    </p>

    <div class="prose max-w-none">
        {!! $post->content !!}
    </div>
</div>
@endsection