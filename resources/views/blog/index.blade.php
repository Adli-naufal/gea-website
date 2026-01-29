@extends('layouts.public')

@section('title', 'Blog')

@section('content')
<div class="max-w-4xl mx-auto px-4 py-10">
    <h1 class="text-3xl font-bold mb-6">Blog</h1>

    @foreach ($posts as $post)
        <article class="mb-8 border-b pb-4">
            <h2 class="text-xl font-semibold">
                <a href="{{ route('blog.show', $post->slug) }}">
                    {{ $post->title }}
                </a>
            </h2>
            <p class="text-sm text-gray-500">
                {{ $post->created_at->format('d M Y') }}
            </p>
            <p class="mt-2 text-gray-700">
                {{ Str::limit($post->excerpt, 150) }}
            </p>
        </article>
    @endforeach

    {{ $posts->links() }}
</div>
@endsection