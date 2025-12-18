<x-admin-layout>
    <div>
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold">About Information</h1>
            @if(!$about)
            <a href="{{ route('admin.about.create') }}" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">
                Create About
            </a>
            @endif
        </div>

        @if($about)
        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow">
            <div class="flex justify-between items-start mb-4">
                <div>
                    <h2 class="text-2xl font-semibold">{{ $about->name }}</h2>
                    <p class="text-gray-600 dark:text-gray-400">{{ $about->title }}</p>
                </div>
                <a href="{{ route('admin.about.edit', $about->id) }}" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">
                    Edit
                </a>
            </div>
            
            @if($about->profile_image)
            <img src="{{ asset('storage/' . $about->profile_image) }}" alt="{{ $about->name }}" class="w-32 h-32 rounded-full mb-4">
            @endif
            
            <div class="space-y-2">
                @if($about->bio)
                <p><strong>Bio:</strong> {{ $about->bio }}</p>
                @endif
                @if($about->email)
                <p><strong>Email:</strong> {{ $about->email }}</p>
                @endif
                @if($about->phone)
                <p><strong>Phone:</strong> {{ $about->phone }}</p>
                @endif
                @if($about->location)
                <p><strong>Location:</strong> {{ $about->location }}</p>
                @endif
                @if($about->summary)
                <p><strong>Summary:</strong> {{ $about->summary }}</p>
                @endif
            </div>
        </div>
        @else
        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow text-center">
            <p class="text-gray-600 mb-4">No about information found.</p>
            <a href="{{ route('admin.about.create') }}" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">
                Create About Information
            </a>
        </div>
        @endif
    </div>
</x-admin-layout>

