@extends('layouts.admin')

@section('content')
<div class="p-6">
    <h1 class="text-2xl font-bold mb-4">Blog Posts</h1>

    <a href="{{ route('admin.blog.create') }}"
       class="mb-4 inline-block px-4 py-2 bg-black text-white rounded">
        + New Post
    </a>

    <table class="w-full border">
        <tr class="border-b">
            <th class="text-left p-2">Title</th>
            <th>Status</th>
            <th></th>
        </tr>

        @foreach ($posts as $post)
        <tr class="border-b">
            <td class="p-2">{{ $post->title }}</td>
            <td>{{ $post->is_published ? 'Published' : 'Draft' }}</td>
            <td>
                <a href="{{ route('admin.blog.edit', $post) }}"
                   class="text-blue-600">Edit</a>

                <form method="POST"
                        action="{{ route('admin.blog.destroy', $post) }}"
                        onsubmit="return confirm('Delete this post?')">
                    @csrf
                    @method('DELETE')
                    <button class="text-red-600">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {{ $posts->links() }}
</div>
@endsection