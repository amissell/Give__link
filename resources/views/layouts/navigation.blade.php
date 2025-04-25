<nav class="bg-white border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->

                <div class="flex items-center space-x-2 mb-8">
                    <i class="fas fa-hand-holding-heart text-2xl"></i>
                    <span class="text-2xl font-bold">GiveLink</span>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:ml-10 sm:flex">
                    <a href="{{ route('home') }}" class="inline-flex items-center px-1 pt-1 border-b-2 border-indigo-500 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition">
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
                @guest
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 hover:text-indigo-600">Log in</a>
                    <a href="{{ route('register') }}" class="ml-4 px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700">Register</a>
                @else
                    <a href="{{ route('dashboard') }}" class="text-sm text-gray-700 hover:text-indigo-600">Dashboard</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-sm text-gray-700 hover:text-indigo-600">Log Out</button>
                    </form>
                @endguest
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