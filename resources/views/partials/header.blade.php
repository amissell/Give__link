<header class="bg-white border-b border-gray-200 px-6 py-4 flex justify-between items-center">
    <div>
        <h1 class="text-2xl font-bold text-gray-800">@yield('page-title')</h1>
        <p class="text-sm text-gray-600 mt-1">Welcome back, <span class="font-medium">{{ Auth::user()->name ?? 'Admin' }}</span></p>
    </div>
    <div class="flex items-center space-x-4">
        <button class="relative p-2 rounded-full bg-gray-100 text-gray-600 hover:bg-gray-200 transition-colors">
            <i class="fas fa-bell"></i>
            <span class="absolute top-0 right-0 h-2 w-2 bg-red-500 rounded-full"></span>
        </button>
        <button class="p-2 rounded-full bg-gray-100 text-gray-600 hover:bg-gray-200 transition-colors">
            <i class="fas fa-envelope"></i>
        </button> 
        <form action="{{ route('logout') }}" method="POST">
          @csrf
          <button type="submit" class="px-4 py-2 bg-emerald-600 text-white rounded-lg hover:bg-emerald-700 transition-colors flex items-center">
            <i class="fas fa-sign-out-alt mr-2"></i> Logout
          </button>
        </form>
    </div>
</header>
