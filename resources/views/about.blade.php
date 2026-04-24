@extends('layouts.main')

@section('content')

<div class="min-h-screen bg-gradient-to-br from-blue-50 to-indigo-100 py-10 px-4">

    <!-- Header -->
    <div class="max-w-4xl mx-auto text-center mb-10">
        <h1 class="text-4xl font-bold text-gray-800 mb-2">
            {{ $title }}
        </h1>
        <p class="text-gray-600 text-lg">
            Welcome to our platform 🚀
        </p>
    </div>

    <!-- Card -->
    <div class="max-w-4xl mx-auto bg-white rounded-2xl shadow-lg p-8">

        <!-- Profile Section -->
        <div class="flex flex-col md:flex-row items-center gap-6">

            <!-- Avatar -->
            <div class="w-32 h-32 rounded-full overflow-hidden shadow-md">
                <img src="https://i.pravatar.cc/300" alt="profile" class="w-full h-full object-cover">
            </div>

            <!-- Info -->
            <div class="text-center md:text-left">
                <h2 class="text-2xl font-semibold text-gray-800">
                    ARGO CHANNEL
                </h2>
                <p class="text-blue-500 font-medium">
                    Web Developer • Student
                </p>
                <p class="text-gray-600 mt-2">
                    I build simple, clean, and functional web applications using Laravel and modern frontend tools.
                </p>
            </div>

        </div>

        <!-- Divider -->
        <div class="border-t my-6"></div>

        <!-- About Content -->
        <div class="grid md:grid-cols-2 gap-6">

            <!-- Left -->
            <div>
                <h3 class="text-xl font-semibold text-gray-800 mb-2">💡 About This Project</h3>
                <p class="text-gray-600">
                    This website is a digital book platform where users can explore books,
                    search by category or author, and read content easily.
                </p>
            </div>

            <!-- Right -->
            <div>
                <h3 class="text-xl font-semibold text-gray-800 mb-2">⚙️ Tech Stack</h3>
                <ul class="text-gray-600 space-y-1">
                    <li>• Laravel</li>
                    <li>• Tailwind CSS</li>
                    <li>• MySQL</li>
                    <li>• Blade Template</li>
                </ul>
            </div>

        </div>

        <!-- Footer -->
        <div class="mt-8 text-center">
            <p class="text-gray-500 text-sm">
                © {{ date('Y') }} ARGO CHANNEL. All rights reserved.
            </p>
        </div>

    </div>

</div>

@endsection