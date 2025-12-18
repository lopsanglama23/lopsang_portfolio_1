<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin Panel - {{ config('app.name', 'Laravel') }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-100 dark:bg-gray-900">
    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-gray-800 text-white">
            <div class="p-4">
                <h2 class="text-2xl font-bold">Admin Panel</h2>
            </div>
            <nav class="mt-8">
                <a href="{{ route('admin.dashboard') }}" class="block px-4 py-2 hover:bg-gray-700 {{ request()->routeIs('admin.dashboard') ? 'bg-gray-700' : '' }}">
                    Dashboard
                </a>
                <a href="{{ route('admin.about.index') }}" class="block px-4 py-2 hover:bg-gray-700 {{ request()->routeIs('admin.about.*') ? 'bg-gray-700' : '' }}">
                    About
                </a>
                <a href="{{ route('admin.skills.index') }}" class="block px-4 py-2 hover:bg-gray-700 {{ request()->routeIs('admin.skills.*') ? 'bg-gray-700' : '' }}">
                    Skills
                </a>
                <a href="{{ route('admin.projects.index') }}" class="block px-4 py-2 hover:bg-gray-700 {{ request()->routeIs('admin.projects.*') ? 'bg-gray-700' : '' }}">
                    Projects
                </a>
                <a href="{{ route('admin.experiences.index') }}" class="block px-4 py-2 hover:bg-gray-700 {{ request()->routeIs('admin.experiences.*') ? 'bg-gray-700' : '' }}">
                    Experience
                </a>
                <a href="{{ route('admin.educations.index') }}" class="block px-4 py-2 hover:bg-gray-700 {{ request()->routeIs('admin.educations.*') ? 'bg-gray-700' : '' }}">
                    Education
                </a>
                <a href="{{ route('admin.blog-posts.index') }}" class="block px-4 py-2 hover:bg-gray-700 {{ request()->routeIs('admin.blog-posts.*') ? 'bg-gray-700' : '' }}">
                    Blog Posts
                </a>
                <a href="{{ route('admin.contacts.index') }}" class="block px-4 py-2 hover:bg-gray-700 {{ request()->routeIs('admin.contacts.*') ? 'bg-gray-700' : '' }}">
                    Contacts
                </a>
            </nav>
            <div class="absolute bottom-0 w-64 p-4">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full text-left px-4 py-2 hover:bg-gray-700 rounded">
                        Logout
                    </button>
                </form>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-8">
            @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
            @endif

            @if(session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                {{ session('error') }}
            </div>
            @endif

            {{ $slot }}
        </main>
    </div>
</body>
</html>

