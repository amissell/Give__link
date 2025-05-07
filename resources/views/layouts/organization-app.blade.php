<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organization Dashboard - GiveLink</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        
        .sidebar-link.active {
            background-color: rgba(16, 185, 129, 0.1);
            color: #10B981;
            border-right: 3px solid #10B981;
        }
        
        .dashboard-card {
            transition: all 0.3s ease;
        }
        
        .dashboard-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        
        .btn-emerald {
            background-color: #10B981;
            color: white;
            transition: all 0.3s ease;
        }
        
        .btn-emerald:hover {
            background-color: #059669;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(16, 185, 129, 0.2);
        }
        
        .gradient-text {
            background: linear-gradient(90deg, #10B981, #0EA472);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            display: inline-block;
        }
    </style>
</head>

<body class="bg-gray-50">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <div class="hidden md:flex md:flex-shrink-0">
            <div class="flex flex-col w-64 bg-white border-r border-gray-200">
                <!-- Logo -->
                <div class="flex items-center justify-center h-16 px-4 bg-emerald-500 text-white">
                    <a href="{{ route('organizations.dashboard') }}" class="flex items-center space-x-2">
                        <i class="fas fa-hand-holding-heart text-2xl"></i>
                        <span class="text-xl font-bold">GiveLink</span>
                    </a>
                </div>
                
                <!-- Navigation -->
                <div class="flex-1 overflow-y-auto py-4">
                    <nav class="px-2 space-y-1">
                        <a href="{{ route('organizations.dashboard') }}" class="sidebar-link active flex items-center px-4 py-3 text-gray-700 rounded-lg hover:bg-gray-50 group">
                            <i class="fas fa-tachometer-alt mr-3 text-gray-500 group-hover:text-emerald-500"></i>
                            <span>Dashboard</span>
                        </a>
                        
                        <a href="{{ route('events.create') }}" class="sidebar-link flex items-center px-4 py-3 text-gray-700 rounded-lg hover:bg-gray-50 group">
                            <i class="fas fa-calendar-plus mr-3 text-gray-500 group-hover:text-emerald-500"></i>
                            <span>Create Event</span>
                        </a>
                        
                        <a href="{{ route('events.organizationEvents') }}" class="sidebar-link flex items-center px-4 py-3 text-gray-700 rounded-lg hover:bg-gray-50 group">
                            <i class="fas fa-calendar-alt mr-3 text-gray-500 group-hover:text-emerald-500"></i>
                            <span>All Events</span>
                        </a>
                    </nav>
                </div>
                
                <!-- Logout -->
                <div class="p-4 border-t border-gray-200">
                <form action="{{ route('logout') }}" method="POST">
                  <button class="flex items-center w-full px-4 py-2 text-gray-700 rounded-lg hover:bg-red-50 hover:text-red-500 transition-colors duration-300">
                    <i class="fas fa-sign-out-alt mr-3"></i>
                    <span>Logout</span>
                  </button>
                  @csrf
                </form>
              </div>
            </div>
        </div>
        
        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Top Navigation -->
            <nav class="bg-white shadow-sm px-6 py-3 flex justify-between items-center">
  
                
                <!-- Search bar - visible on desktop -->
                <div class="hidden md:flex items-center flex-1 max-w-md mx-4">
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <i class="fas fa-search text-gray-400"></i>
                        </div>
                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-emerald-500 focus:border-emerald-500 block w-full pl-10 p-2.5" placeholder="Search...">
                    </div>
                </div>
                
                <!-- Right side icons -->
                <div class="flex items-center space-x-4">
                    <div class="relative">
                        <button id="profile-button" class="flex items-center space-x-2 focus:outline-none">
                            <img src="{{ Auth::user()->profile_picture ?? 'https://ui-avatars.com/api/?name=' . urlencode(Auth::user()->organization->name) }}"
                            alt="Profile" class="w-8 h-8 rounded-full object-cover border border-gray-300">
                            <span class="text-sm text-gray-700 font-medium">{{ Auth::user()->organization->name ?? Auth::user()->name }}</span>
                            <i class="fas fa-chevron-down text-xs ml-1"></i>
                        </button>
                        <div id="profile-menu" class="hidden absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-lg shadow-md z-50">
                            <a href="{{ route('profile') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">View Profile</a>
                        </div>
                    </div>
                </nav>
                <div class="p-6">
                    @yield('content')
                </div>
            </div>
        </div>
</body>
</html>