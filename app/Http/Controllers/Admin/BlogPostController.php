<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogPost;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BlogPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = BlogPost::orderByDesc('created_at')->paginate(10);

        return view('admin.blog-posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog-posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'           => 'required|string|max:255',
            'slug'            => 'nullable|string|max:255|unique:blog_posts,slug',
            'excerpt'         => 'nullable|string',
            'content'         => 'required|string',
            'featured_image'  => 'nullable|image|max:2048',
            'category'        => 'nullable|string|max:255',
            'tags'            => 'nullable|string', // comma separated, will be converted to array
            'is_published'    => 'sometimes|boolean',
            'published_at'    => 'nullable|date',
        ]);

        // Handle slug
        $slug = $validated['slug'] ?? Str::slug($validated['title']);
        if (BlogPost::where('slug', $slug)->exists()) {
            $slug .= '-' . time();
        }
        $validated['slug'] = $slug;

        // Handle featured image upload
        if ($request->hasFile('featured_image')) {
            $validated['featured_image'] = $request->file('featured_image')->store('blog', 'public');
        }

        // Handle tags (comma separated to array)
        if (!empty($validated['tags'])) {
            $tags = array_filter(array_map('trim', explode(',', $validated['tags'])));
            $validated['tags'] = $tags;
        } else {
            unset($validated['tags']);
        }

        // Published / draft handling
        $validated['is_published'] = $request->boolean('is_published');
        if ($validated['is_published'] && empty($validated['published_at'])) {
            $validated['published_at'] = now();
        }

        $validated['user_id'] = Auth::id();

        BlogPost::create($validated);

        return redirect()
            ->route('admin.blog-posts.index')
            ->with('success', 'Blog post created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = BlogPost::findOrFail($id);

        return view('admin.blog-posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = BlogPost::findOrFail($id);

        return view('admin.blog-posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = BlogPost::findOrFail($id);

        $validated = $request->validate([
            'title'           => 'required|string|max:255',
            'slug'            => 'nullable|string|max:255|unique:blog_posts,slug,' . $post->id,
            'excerpt'         => 'nullable|string',
            'content'         => 'required|string',
            'featured_image'  => 'nullable|image|max:2048',
            'category'        => 'nullable|string|max:255',
            'tags'            => 'nullable|string',
            'is_published'    => 'sometimes|boolean',
            'published_at'    => 'nullable|date',
        ]);

        // Slug handling
        $slug = $validated['slug'] ?? Str::slug($validated['title']);
        if (BlogPost::where('slug', $slug)->where('id', '!=', $post->id)->exists()) {
            $slug .= '-' . time();
        }
        $validated['slug'] = $slug;

        // Image upload
        if ($request->hasFile('featured_image')) {
            $validated['featured_image'] = $request->file('featured_image')->store('blog', 'public');
        }

        // Tags
        if (!empty($validated['tags'])) {
            $tags = array_filter(array_map('trim', explode(',', $validated['tags'])));
            $validated['tags'] = $tags;
        } else {
            unset($validated['tags']);
        }

        $validated['is_published'] = $request->boolean('is_published');
        if ($validated['is_published'] && empty($validated['published_at'])) {
            $validated['published_at'] = now();
        }

        $post->update($validated);

        return redirect()
            ->route('admin.blog-posts.index')
            ->with('success', 'Blog post updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = BlogPost::findOrFail($id);
        $post->delete();

        return redirect()
            ->route('admin.blog-posts.index')
            ->with('success', 'Blog post deleted successfully.');
    }
}
