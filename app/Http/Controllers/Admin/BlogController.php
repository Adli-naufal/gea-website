<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(10);
        return view('admin.blog.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.blog.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'nullable|string',
            'content' => 'required|string',
            'is_published' => 'boolean',
        ]);

        // ✅ SLUG SAFETY (CREATE)
        $baseSlug = Str::slug($data['title']);
        $slug = $baseSlug;

        $count = Post::where('slug', 'like', "{$baseSlug}%")->count();
        if ($count) {
            $slug = "{$baseSlug}-" . ($count + 1);
        }

        $data['slug'] = $slug;
        $data['is_published'] = $request->boolean('is_published');

        Post::create($data);

        return redirect()->route('admin.blog.index')
            ->with('success', 'Post created');
    }
    
    public function edit(Post $post)
    {
        return view('admin.blog.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'nullable|string',
            'content' => 'required|string',
            'is_published' => 'boolean',
        ]);

        // ✅ SLUG SAFETY (UPDATE)
        $baseSlug = Str::slug($data['title']);
        $slug = $baseSlug;

        $count = Post::where('slug', 'like', "{$baseSlug}%")
            ->where('id', '!=', $post->id)
            ->count();

        if ($count) {
            $slug = "{$baseSlug}-" . ($count + 1);
        }

        $data['slug'] = $slug;
        $data['is_published'] = $request->boolean('is_published');

        $post->update($data);

        return redirect()->route('admin.blog.index')
            ->with('success', 'Post updated');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()
            ->route('admin.blog.index')
            ->with('success', 'Post deleted');
    }
}