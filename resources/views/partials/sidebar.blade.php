<div class="w-64 bg-emerald-700 text-white">
    <div class="p-6">
        <!-- Logo Section -->
        <div class="flex items-center space-x-2 mb-8">
            <i class="fas fa-hand-holding-heart text-2xl"></i>
            <span class="text-2xl font-bold">GiveLink</span>
        </div>

        <div class="space-y-1">
            <!-- Dashboard Link -->
            <a href="{{ route('dashboard') }}"
                class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-emerald-600 transition-colors">
                <i class="fas fa-chart-pie"></i>
                <span>Dashboard</span>
            </a>

                <a href="#"
                    class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-emerald-600 transition-colors">
                    <i class="fas fa-users"></i>
                    <span>Manage Organizations</span>
                </a>

                <a href="{{ route('categories.index') }}"
                    class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-emerald-600 transition-colors">
                    <i class="fas fa-tags"></i>
                    <span>Manage Categories</span>
                </a>
                <a href="{{ route('admin.users.index') }}"
                    class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-emerald-600 transition-colors">
                    <i class="fas fa-user-cog"></i>
                    <span>Manage Users</span>
                </a>


            <!-- Reports (Optional) -->
            <a href="#"
                class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-emerald-600 transition-colors">
                <i class="fas fa-file-alt"></i>
                <span>Reports</span>
            </a>

            <!-- Settings -->
            <a href="#"
                class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-emerald-600 transition-colors">
                <i class="fas fa-cog"></i>
                <span>Settings</span>
            </a>

            <!-- Authentication Links -->
            @guest
                <a href="{{ route('login') }}"
                    class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-emerald-600 transition-colors">
                    <i class="fas fa-sign-in-alt"></i>
                    <span>Login</span>
                </a>
                <a href="{{ route('register') }}"
                    class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-emerald-600 transition-colors">
                    <i class="fas fa-user-plus"></i>
                    <span>Register</span>
                </a>
            @endguest

            @auth
                <form action="{{ route('logout') }}" method="POST" class="px-4 py-3">
                    @csrf
                    <button type="submit"
                        class="flex items-center space-x-3 rounded-lg hover:bg-emerald-600 transition-colors">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Logout</span>
                    </button>
                </form>
            @endauth
        </div>
    </div>
</div>
