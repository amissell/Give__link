<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GiveLink</title>
    
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

</head>
<body style="background-color:rgb(248, 248, 248); color: #1F2937;">

    {{-- Volunteer Page Header --}}
    <header class="bg-gray-800 text-white py-4">
        <div class="container mx-auto flex items-center justify-between">
            <div class="flex items-center">
                <!-- Volunteer Profile Image -->
                <img src="{{ asset('storage/' . auth()->user()->profile_image) }}" alt="Profile Image" class="w-16 h-16 rounded-full mr-4">
                <div>
                    <h2 class="text-xl font-bold">{{ auth()->user()->name }}</h2>
                    <p class="text-sm">Volunteer</p>
                </div>
            </div>

            <!-- Logout Button -->
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg">Logout</button>
            </form>
        </div>
    </header>

    {{-- Page content --}}
    <main class="container mx-auto px-4 py-8">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('partials.footer')

</body>
</html>
