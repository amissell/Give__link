<div class="w-64 bg-emerald-700 text-white h-screen flex flex-col">
    <div class="p-6 flex-grow">
        <!-- Logo Section -->
        <div class="flex items-center space-x-2 mb-8">
            <i class="fas fa-hand-holding-heart text-2xl"></i>
            <span class="text-2xl font-bold">GiveLink</span>
        </div>

        <div class="space-y-1">
            <!-- Dashboard Link -->
            <a href="{{ route('dashboard') }}"
                class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-emerald-600 {{ request()->routeIs('dashboard') ? 'bg-emerald-600' : '' }} transition-colors">
                <i class="fas fa-chart-pie"></i>
                <span>Dashboard</span>
            </a>

            <a href="{{ route('organizations.manage') }}"
                class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-emerald-600 {{ request()->routeIs('organizations.manage') ? 'bg-emerald-600' : '' }} transition-colors">
                <i class="fas fa-users"></i>
                <span>Manage Organizations</span>
            </a>

            <a href="{{ route('categories.index') }}"
                class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-emerald-600 {{ request()->routeIs('categories.index') ? 'bg-emerald-600' : '' }} transition-colors">
                <i class="fas fa-tags"></i>
                <span>Manage Categories</span>
            </a>
            
            <a href="{{ route('admin.users.index') }}"
                class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-emerald-600 {{ request()->routeIs('admin.users.index') ? 'bg-emerald-600' : '' }} transition-colors">
                <i class="fas fa-user-cog"></i>
                <span>Manage Users</span>
            </a>
        </div>
    </div>
    
    <!-- Logout at bottom -->
    <div class="p-4 border-t border-emerald-600">
        @auth
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit"
                    class="flex items-center w-full space-x-3 px-4 py-2 rounded-lg hover:bg-emerald-600 transition-colors">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                </button>
            </form>
        @endauth
    </div>
</div>
