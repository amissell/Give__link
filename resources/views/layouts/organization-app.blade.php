<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Organization Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css') {{-- or your style loader --}}
</head>
<body class="bg-gray-100 text-gray-800">

    {{-- Navbar --}}
    <nav class="bg-white shadow mb-6">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="{{ route('organization.dashboard') }}" class="text-2xl font-bold text-blue-600">
                GiveLink Org
            </a>
            <div class="flex items-center space-x-4">
                <a href="{{ route('organization.dashboard') }}" class="text-sm hover:underline">Dashboard</a>
                <a href="{{ route('events.create') }}" class="text-sm hover:underline">Create Event</a>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="text-sm text-red-500 hover:underline">Logout</button>
                </form>
            </div>
        </div>
    </nav>

    {{-- Main Content --}}
    <main class="container mx-auto px-6">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="mt-12 text-center text-sm text-gray-500 py-4">
        &copy; {{ date('Y') }} GiveLink | Organization Panel
    </footer>
</body>
</html>
