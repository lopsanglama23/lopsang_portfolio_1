<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $post->title }} - {{ config('app.name', 'Laravel') }}</title>
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

    <article class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow overflow-hidden">
            @if($post->featured_image)
            <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}" class="w-full h-96 object-cover">
            @endif
            <div class="p-8">
                <h1 class="text-4xl font-bold mb-4">{{ $post->title }}</h1>
                <div class="flex items-center text-sm text-gray-500 mb-6">
                    <span>{{ $post->published_at->format('M d, Y') }}</span>
                    <span class="mx-2">•</span>
                    <span>{{ $post->views }} views</span>
                    @if($post->category)
                    <span class="mx-2">•</span>
                    <span>{{ $post->category }}</span>
                    @endif
                </div>
                <div class="prose dark:prose-invert max-w-none">
                    {!! nl2br(e($post->content)) !!}
                </div>
                @if($post->tags)
                <div class="mt-8">
                    <h3 class="text-lg font-semibold mb-2">Tags:</h3>
                    <div class="flex flex-wrap gap-2">
                        @foreach($post->tags as $tag)
                        <span class="px-3 py-1 bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 rounded-full text-sm">{{ $tag }}</span>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>
        </div>
        
        <div class="mt-8">
            <a href="{{ route('blog.index') }}" class="text-indigo-600 hover:underline">← Back to Blog</a>
        </div>
    </article>
</body>
</html>

