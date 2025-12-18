<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Blog - {{ config('app.name', 'Laravel') }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-50 dark:bg-gray-900">
    <nav class="bg-white dark:bg-gray-800 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="text-xl font-bold text-gray-900 dark:text-white">Portfolio</a>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="{{ route('home') }}" class="text-gray-700 dark:text-gray-300 hover:text-indigo-600">Home</a>
                    <a href="{{ route('blog.index') }}" class="text-gray-700 dark:text-gray-300 hover:text-indigo-600">Blog</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <h1 class="text-4xl font-bold mb-8">Blog Posts</h1>
        
        @forelse($posts as $post)
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow mb-6 overflow-hidden">
            @if($post->featured_image)
            <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}" class="w-full h-64 object-cover">
            @endif
            <div class="p-6">
                <h2 class="text-2xl font-semibold mb-2">
                    <a href="{{ route('blog.show', $post->slug) }}" class="hover:text-indigo-600">
                        {{ $post->title }}
                    </a>
                </h2>
                <p class="text-gray-600 dark:text-gray-400 mb-4">{{ $post->excerpt ?? Str::limit($post->content, 150) }}</p>
                <div class="flex items-center justify-between">
                    <span class="text-sm text-gray-500">{{ $post->published_at->format('M d, Y') }}</span>
                    <a href="{{ route('blog.show', $post->slug) }}" class="text-indigo-600 hover:underline">Read More →</a>
                </div>
            </div>
        </div>
        @empty
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-8 text-center">
            <p class="text-gray-600">No blog posts available yet.</p>
        </div>
        @endforelse

        <div class="mt-8">
            {{ $posts->links() }}
        </div>
    </div>
</body>
</html>

