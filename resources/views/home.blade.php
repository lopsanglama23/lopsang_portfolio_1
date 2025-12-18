<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $about->name ?? 'Portfolio' }} - {{ $about->title ?? 'Web Developer' }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-50 dark:bg-gray-900">
    <!-- Navigation -->
    <nav class="bg-white dark:bg-gray-800 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="text-xl font-bold text-gray-900 dark:text-white">
                        {{ $about->name ?? 'Portfolio' }}
                    </a>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="{{ route('home') }}#about" class="text-gray-700 dark:text-gray-300 hover:text-indigo-600">About</a>
                    <a href="{{ route('home') }}#skills" class="text-gray-700 dark:text-gray-300 hover:text-indigo-600">Skills</a>
                    <a href="{{ route('home') }}#projects" class="text-gray-700 dark:text-gray-300 hover:text-indigo-600">Projects</a>
                    <a href="{{ route('home') }}#experience" class="text-gray-700 dark:text-gray-300 hover:text-indigo-600">Experience</a>
                    <a href="{{ route('home') }}#contact" class="text-gray-700 dark:text-gray-300 hover:text-indigo-600">Contact</a>
                    <a href="{{ route('blog.index') }}" class="text-gray-700 dark:text-gray-300 hover:text-indigo-600">Blog</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-5xl font-bold mb-4">{{ $about->name ?? 'Your Name' }}</h1>
            <p class="text-2xl mb-8">{{ $about->title ?? 'Web Developer' }}</p>
            <p class="text-lg max-w-2xl mx-auto">{{ $about->summary ?? 'Welcome to my portfolio' }}</p>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-16 bg-white dark:bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center mb-8">About Me</h2>
            <div class="grid md:grid-cols-2 gap-8">
                @if($about && $about->profile_image)
                <div>
                    <img src="{{ asset('storage/' . $about->profile_image) }}" alt="{{ $about->name }}" class="rounded-lg shadow-lg">
                </div>
                @endif
                <div>
                    <p class="text-gray-700 dark:text-gray-300 mb-4">{{ $about->bio ?? 'Add your bio here' }}</p>
                    @if($about)
                    <div class="space-y-2">
                        @if($about->email)
                        <p><strong>Email:</strong> {{ $about->email }}</p>
                        @endif
                        @if($about->location)
                        <p><strong>Location:</strong> {{ $about->location }}</p>
                        @endif
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="py-16 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center mb-8">Skills</h2>
            <div class="grid md:grid-cols-3 gap-6">
                @forelse($skills as $skill)
                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow">
                    <h3 class="text-xl font-semibold mb-2">{{ $skill->name }}</h3>
                    @if($skill->category)
                    <p class="text-sm text-gray-600 dark:text-gray-400 mb-2">{{ $skill->category }}</p>
                    @endif
                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                        <div class="bg-indigo-600 h-2.5 rounded-full" style="width: {{ $skill->proficiency }}%"></div>
                    </div>
                    <p class="text-sm mt-2">{{ $skill->proficiency }}%</p>
                </div>
                @empty
                <p class="col-span-3 text-center text-gray-600">No skills added yet.</p>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-16 bg-white dark:bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center mb-8">Projects</h2>
            <div class="grid md:grid-cols-3 gap-6">
                @forelse($projects as $project)
                <div class="bg-gray-50 dark:bg-gray-900 rounded-lg shadow-lg overflow-hidden">
                    @if($project->image)
                    <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="w-full h-48 object-cover">
                    @endif
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">{{ $project->title }}</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-4">{{ Str::limit($project->description, 100) }}</p>
                        <div class="flex space-x-4">
                            @if($project->demo_link)
                            <a href="{{ $project->demo_link }}" target="_blank" class="text-indigo-600 hover:underline">Demo</a>
                            @endif
                            @if($project->github_link)
                            <a href="{{ $project->github_link }}" target="_blank" class="text-indigo-600 hover:underline">GitHub</a>
                            @endif
                        </div>
                    </div>
                </div>
                @empty
                <p class="col-span-3 text-center text-gray-600">No projects added yet.</p>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section id="experience" class="py-16 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center mb-8">Experience</h2>
            <div class="space-y-8">
                @forelse($experiences as $experience)
                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow">
                    <h3 class="text-xl font-semibold">{{ $experience->title }}</h3>
                    <p class="text-indigo-600">{{ $experience->company }}</p>
                    <p class="text-sm text-gray-600 dark:text-gray-400">
                        {{ \Carbon\Carbon::parse($experience->start_date)->format('M Y') }} - 
                        {{ $experience->is_current ? 'Present' : \Carbon\Carbon::parse($experience->end_date)->format('M Y') }}
                    </p>
                    @if($experience->description)
                    <p class="mt-2 text-gray-700 dark:text-gray-300">{{ $experience->description }}</p>
                    @endif
                </div>
                @empty
                <p class="text-center text-gray-600">No experience added yet.</p>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Education Section -->
    <section id="education" class="py-16 bg-white dark:bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center mb-8">Education</h2>
            <div class="space-y-8">
                @forelse($educations as $education)
                <div class="bg-gray-50 dark:bg-gray-900 p-6 rounded-lg shadow">
                    <h3 class="text-xl font-semibold">{{ $education->degree }}</h3>
                    <p class="text-indigo-600">{{ $education->institution }}</p>
                    <p class="text-sm text-gray-600 dark:text-gray-400">
                        {{ \Carbon\Carbon::parse($education->start_date)->format('Y') }} - 
                        {{ $education->is_current ? 'Present' : \Carbon\Carbon::parse($education->end_date)->format('Y') }}
                    </p>
                    @if($education->description)
                    <p class="mt-2 text-gray-700 dark:text-gray-300">{{ $education->description }}</p>
                    @endif
                </div>
                @empty
                <p class="text-center text-gray-600">No education added yet.</p>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-16 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center mb-8">Get In Touch</h2>
            <div class="max-w-2xl mx-auto">
                @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                    {{ session('success') }}
                </div>
                @endif
                <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                    @csrf
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Name</label>
                        <input type="text" name="name" id="name" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                        @error('name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                        <input type="email" name="email" id="email" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                        @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="subject" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Subject</label>
                        <input type="text" name="subject" id="subject" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Message</label>
                        <textarea name="message" id="message" rows="5" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"></textarea>
                        @error('message')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <button type="submit" class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p>&copy; {{ date('Y') }} {{ $about->name ?? 'Portfolio' }}. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>

