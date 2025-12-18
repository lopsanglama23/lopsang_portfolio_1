<x-admin-layout>
    <div>
        <h1 class="text-3xl font-bold mb-8">Dashboard</h1>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow">
                <h3 class="text-lg font-semibold mb-2">Skills</h3>
                <p class="text-3xl font-bold text-indigo-600">{{ $stats['skills'] }}</p>
            </div>
            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow">
                <h3 class="text-lg font-semibold mb-2">Projects</h3>
                <p class="text-3xl font-bold text-indigo-600">{{ $stats['projects'] }}</p>
            </div>
            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow">
                <h3 class="text-lg font-semibold mb-2">Blog Posts</h3>
                <p class="text-3xl font-bold text-indigo-600">{{ $stats['blog_posts'] }}</p>
            </div>
            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow">
                <h3 class="text-lg font-semibold mb-2">Experiences</h3>
                <p class="text-3xl font-bold text-indigo-600">{{ $stats['experiences'] }}</p>
            </div>
            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow">
                <h3 class="text-lg font-semibold mb-2">Educations</h3>
                <p class="text-3xl font-bold text-indigo-600">{{ $stats['educations'] }}</p>
            </div>
            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow">
                <h3 class="text-lg font-semibold mb-2">Unread Messages</h3>
                <p class="text-3xl font-bold text-red-600">{{ $stats['unread_contacts'] }}</p>
            </div>
        </div>

        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow">
            <h2 class="text-2xl font-bold mb-4">Quick Links</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <a href="{{ route('admin.about.index') }}" class="p-4 bg-indigo-50 dark:bg-gray-700 rounded-lg hover:bg-indigo-100 text-center">
                    Manage About
                </a>
                <a href="{{ route('admin.skills.index') }}" class="p-4 bg-indigo-50 dark:bg-gray-700 rounded-lg hover:bg-indigo-100 text-center">
                    Manage Skills
                </a>
                <a href="{{ route('admin.projects.index') }}" class="p-4 bg-indigo-50 dark:bg-gray-700 rounded-lg hover:bg-indigo-100 text-center">
                    Manage Projects
                </a>
                <a href="{{ route('admin.contacts.index') }}" class="p-4 bg-indigo-50 dark:bg-gray-700 rounded-lg hover:bg-indigo-100 text-center">
                    View Messages
                </a>
            </div>
        </div>
    </div>
</x-admin-layout>

