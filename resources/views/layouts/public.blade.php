<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'GiveLink')</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <style>
    /* Optional: for smooth transition of the mobile menu */
    .mobile-menu {
      transition: transform 0.3s ease;
    }
  </style>
</head>

<body class="bg-gray-50 font-sans">
  <!-- Navigation -->
  <nav class="bg-green-600 border-b border-gray-200">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between h-16">
      <div class="flex">
        <!-- Logo -->
        <div class="flex-shrink-0 flex items-center">
          <a href="/" class="font-bold text-xl text-white">
            GiveLink
          </a>
        </div>

        <!-- Navigation Links -->   
        <div class="hidden space-x-8 sm:ml-10 sm:flex">
          <a href="{{url ('/')}}" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-white hover:text-green-200 focus:outline-none focus:text-green-300 transition">
            Home
          </a>
          <a href="{{ route('causes') }}" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-white hover:text-green-200 focus:outline-none focus:text-green-300 transition">
            Causes
          </a>
          <a href="{{ route('events') }}" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-white hover:text-green-200 focus:outline-none focus:text-green-300 transition">
            Events
          </a>
          <a href="{{ route('organizations') }}" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-white hover:text-green-200 focus:outline-none focus:text-green-300 transition">
            Organizations
          </a>
          <a href="{{ route('about') }}" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-white hover:text-green-200 focus:outline-none focus:text-green-300 transition">
            About Us
          </a>
        </div>
      </div>

      <!-- Authentication Links -->
      <div class="hidden sm:flex sm:items-center sm:ml-6 space-x-4">
        <a href="/login" class="text-sm text-white hover:text-green-200">Log in</a>
        <a href="/register" class="ml-4 px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-green-600 bg-white hover:bg-green-50 hover:text-green-700">Register</a>
      </div>

      <!-- Mobile menu button -->
      <div class="flex items-center sm:hidden">
        <button id="mobile-menu-button" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-white hover:text-green-200 hover:bg-green-100 focus:outline-none focus:bg-green-100 focus:text-green-200 transition">
          <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>
    </div>
  </div>
</nav>

<!-- Mobile Menu -->
<div id="mobile-menu" class="sm:hidden mobile-menu transform translate-x-full bg-white">
  <div class="px-2 pt-2 pb-3 space-y-1">
    <a href="/" class="text-green-600 block px-3 py-2 text-base font-medium">Home</a>
    <a href="#causes" class="text-green-600 hover:text-green-700 block px-3 py-2 text-base font-medium">Causes</a>
    <a href="#events" class="text-green-600 hover:text-green-700 block px-3 py-2 text-base font-medium">Events</a>
    <a href="#organizations" class="text-green-600 hover:text-green-700 block px-3 py-2 text-base font-medium">Organizations</a>
    <a href="#about" class="text-green-600 hover:text-green-700 block px-3 py-2 text-base font-medium">About Us</a>
    <a href="/login" class="text-green-600 hover:text-green-700 block px-3 py-2 text-base font-medium">Log in</a>
    <a href="/register" class="ml-4 px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-green-600 hover:bg-green-700 block text-center">Register</a>
  </div>
</div>


  <!-- Main Content -->
  <main>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
      @yield('content')
    </div>
  </main>

  <!-- Footer -->
  <footer class="bg-white border-t border-gray-200">
    <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
      <div class="md:flex md:items-center md:justify-between">
        <div class="flex justify-center md:justify-start space-x-6">
          <a href="#" class="text-gray-400 hover:text-gray-500">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="#" class="text-gray-400 hover:text-gray-500">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#" class="text-gray-400 hover:text-gray-500">
            <i class="fab fa-instagram"></i>
          </a>
        </div>
        <p class="mt-8 text-center text-gray-400 md:mt-0 md:text-right">
          &copy; {{ date('Y') }} GiveLink. All rights reserved.
        </p>
      </div>
    </div>
  </footer>

  <script>
    // Mobile menu toggle
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    
    mobileMenuButton.addEventListener('click', () => {
      mobileMenu.classList.toggle('translate-x-full');
    });
  </script>

  @stack('scripts')
</body>
</html>
