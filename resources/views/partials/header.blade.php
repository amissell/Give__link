<div class="bg-white border-b p-4 flex justify-between items-center sticky top-0 z-10">
    <div>
        <h1 class="text-xl font-semibold text-gray-800">@yield('page-title')</h1>
        <p class="text-sm text-gray-500">Welcome back, {{ Auth::user()->name ?? 'admin'}}</p>
    </div>
    <div class="flex items-center space-x-4">
        <button class="p-2 rounded-full bg-gray-100 text-gray-600 hover:bg-gray-200">
            <i class="fas fa-bell"></i>
        </button>
        <button class="p-2 rounded-full bg-gray-100 text-gray-600 hover:bg-gray-200">
            <i class="fas fa-envelope"></i>
        </button> 
        <form action="{{route ('logout')}}" method="POST">
          @csrf
          <button type="submit" class="p-2 bg-red-500 text-white rounded-lg hover:bg-red-600">
            <i class="fas fa-sign-out-alt"></i> Logout
          </button>
        </form>
    </div>
</div>
