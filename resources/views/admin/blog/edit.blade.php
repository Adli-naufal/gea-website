@extends('layouts.admin')

@section('content')
<div class="p-6 max-w-3xl">
    <h1 class="text-2xl font-bold mb-4">Edit Post</h1>

    <form method="POST"
          action="{{ route('admin.blog.update', $post) }}">
        @csrf
        @method('PUT')

        <input name="title"
               value="{{ $post->title }}"
               class="w-full border p-2 mb-3">

        <textarea name="excerpt"
                  class="w-full border p-2 mb-3">{{ $post->excerpt }}</textarea>

        <textarea name="content"
                  class="w-full border p-2 mb-3"
                  rows="10">{{ $post->content }}</textarea>

        <label class="flex items-center gap-2 mb-4">
            <input type="checkbox" name="is_published" value="1"
                @checked($post->is_published)>
            Publish
        </label>

        <button class="px-4 py-2 bg-black text-white rounded">
            Update
        </button>
    </form>
</div>
@endsection