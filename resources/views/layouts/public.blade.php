<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'GiveLink')</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-gray-50 font-sans">
  <!-- Navigation -->
  <nav class="bg-white border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between h-16">
        <div class="flex">
          <!-- Logo -->
          <div class="flex-shrink-0 flex items-center">
            <a href="/" class="font-bold text-xl text-indigo-700">
              GiveLink
            </a>
          </div>

          <!-- Navigation Links -->
          <div class="hidden space-x-8 sm:ml-10 sm:flex">
            <a href="/" class="inline-flex items-center px-1 pt-1 border-b-2 border-indigo-500 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition">
              Home
            </a>
            <a href="#causes" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition">
              Causes
            </a>
            <a href="#events" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition">
              Events
            </a>
            <a href="#organizations" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition">
              Organizations
            </a>
            <a href="#about" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition">
              About Us
            </a>
          </div>
        </div>

        <!-- Authentication Links -->
        <div class="hidden sm:flex sm:items-center sm:ml-6 space-x-4">
          <a href="/login" class="text-sm text-gray-700 hover:text-indigo-600">Log in</a>
          <a href="/register" class="ml-4 px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700">Register</a>
        </div>

        <!-- Mobile menu button -->
        <div class="flex items-center sm:hidden">
          <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition">
            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>
      </div>
    </div>
  </nav>

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

  @stack('scripts')
</body>
</html>
