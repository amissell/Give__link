<header class="bg-white border-b border-gray-200 px-6 py-4 flex justify-between items-center">
    <!-- Left: Title and welcome message -->
    <div>
        <h1 class="text-2xl font-bold text-gray-800">@yield('page-title')</h1>
        <p class="text-sm text-gray-600 mt-1">Welcome back, <span class="font-medium">{{ Auth::user()->name ?? 'Admin' }}</span></p>
    </div>

    <!-- Right: Icons + Profile -->
    <div class="flex items-center space-x-4">

        <!-- Profile dropdown -->
        <div class="relative">
            <button id="profile-button" class="flex items-center space-x-2 focus:outline-none">
                <img src="{{ Auth::user()->profile_picture ?? 'https://ui-avatars.com/api/?name=' . urlencode(Auth::user()->name) }}" 
                     alt="Profile" class="w-8 h-8 rounded-full object-cover border border-gray-300">
                <span class="text-sm text-gray-700 font-medium">{{ Auth::user()->name }}</span>
                <i class="fas fa-chevron-down text-xs ml-1"></i>
            </button>

            <!-- Dropdown menu -->
            <div id="profile-menu" class="hidden absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-lg shadow-md z-50">
                <a href="{{ route('profile') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">View Profile</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-gray-100">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </div>
</header>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const profileBtn = document.getElementById('profile-button');
        const menu = document.getElementById('profile-menu');

        profileBtn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });

        // Optional: hide menu when clicking outside
        document.addEventListener('click', function(event) {
            if (!profileBtn.contains(event.target) && !menu.contains(event.target)) {
                menu.classList.add('hidden');
            }
        });
    });
</script>
@endpush
