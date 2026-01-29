@extends('layouts.admin')

@section('content')
<div class="p-6 max-w-3xl">
    <h1 class="text-2xl font-bold mb-4">New Post</h1>

    <form method="POST" action="{{ route('admin.blog.store') }}">
        @csrf

        <input name="title" class="w-full border p-2 mb-3"
               placeholder="Title">

        <textarea name="excerpt" class="w-full border p-2 mb-3"
                  placeholder="Excerpt"></textarea>

        <textarea name="content" class="w-full border p-2 mb-3"
                  rows="10"
                  placeholder="Content"></textarea>

        <label class="flex items-center gap-2 mb-4">
            <input type="checkbox" name="is_published" value="1">
            Publish
        </label>

        <button class="px-4 py-2 bg-black text-white rounded">
            Save
        </button>
    </form>
</div>
@endsection