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
                        
                        <a href="#" class="sidebar-link flex items-center px-4 py-3 text-gray-700 rounded-lg hover:bg-gray-50 group">
                            <i class="fas fa-users mr-3 text-gray-500 group-hover:text-emerald-500"></i>
                            <span>Volunteers</span>
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
                    <button class="text-gray-500 hover:text-emerald-500 relative">
                        <i class="fas fa-bell text-xl"></i>
                        <span class="absolute top-0 right-0 h-2 w-2 bg-red-500 rounded-full"></span>
                    </button>
                    
                    <button class="text-gray-500 hover:text-emerald-500">
                        <i class="fas fa-envelope text-xl"></i>
                    </button>
                    
                    <div class="relative">
                        <button class="flex items-center space-x-2 focus:outline-none">
                            <div class="h-8 w-8 rounded-full bg-emerald-100 flex items-center justify-center text-emerald-500">
                                <i class="fas fa-user"></i>
                            </div>
                            <span class="hidden md:inline-block text-sm font-medium">Organization Name</span>
                            <i class="fas fa-chevron-down text-xs text-gray-400"></i>
                        </button>
                    </div>
                </div>
            </nav>
            
            <!-- Page Content -->
            <main class="flex-1 overflow-y-auto bg-gray-50 p-6">
                <!-- Welcome Section -->
                <div class="mb-8">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                        <div>
                            <h1 class="text-3xl font-bold text-gray-800">
                                Welcome, <span class="gradient-text">Organization Name</span>
                            </h1>
                            <div class="flex items-center mt-2">
                                <p class="text-gray-600">Status:</p>
                                <span class="ml-2 px-2 py-1 bg-emerald-100 text-emerald-700 rounded-full text-sm font-medium flex items-center">
                                    <i class="fas fa-check-circle mr-1"></i>
                                    Approved
                                </span>
                            </div>
                        </div>
                        
                        <div class="mt-4 md:mt-0">
                            <a href="#" class="btn-emerald px-4 py-2 rounded-lg flex items-center shadow-md hover:shadow-lg">
                                <i class="fas fa-plus mr-2"></i>
                                Create New Event
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Stats Cards -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                    <!-- Total Events -->
                    <div class="dashboard-card bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-500 text-sm font-medium uppercase tracking-wider">Total Events Created</p>
                                <h2 class="text-4xl font-bold text-emerald-600 mt-2">12</h2>
                            </div>
                            <div class="w-12 h-12 rounded-full bg-emerald-100 flex items-center justify-center">
                                <i class="fas fa-calendar-alt text-emerald-500 text-xl"></i>
                            </div>
                        </div>
                        <div class="mt-4 flex items-center text-sm">
                            <span class="text-green-500 flex items-center">
                                <i class="fas fa-arrow-up mr-1"></i>
                                16%
                            </span>
                            <span class="text-gray-400 ml-2">from last month</span>
                        </div>
                    </div>
                    
                    <!-- Total Volunteers -->
                    <div class="dashboard-card bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-500 text-sm font-medium uppercase tracking-wider">Total Volunteers</p>
                                <h2 class="text-4xl font-bold text-emerald-600 mt-2">48</h2>
                            </div>
                            <div class="w-12 h-12 rounded-full bg-emerald-100 flex items-center justify-center">
                                <i class="fas fa-users text-emerald-500 text-xl"></i>
                            </div>
                        </div>
                        <div class="mt-4 flex items-center text-sm">
                            <span class="text-green-500 flex items-center">
                                <i class="fas fa-arrow-up mr-1"></i>
                                24%
                            </span>
                            <span class="text-gray-400 ml-2">from last month</span>
                        </div>
                    </div>
                    
                    <!-- Upcoming Events -->
                    <div class="dashboard-card bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-500 text-sm font-medium uppercase tracking-wider">Upcoming Events</p>
                                <h2 class="text-4xl font-bold text-emerald-600 mt-2">3</h2>
                            </div>
                            <div class="w-12 h-12 rounded-full bg-emerald-100 flex items-center justify-center">
                                <i class="fas fa-clock text-emerald-500 text-xl"></i>
                            </div>
                        </div>
                        <div class="mt-4 flex items-center text-sm">
                            <span class="text-gray-400">Next event in 3 days</span>
                        </div>
                    </div>
                </div>

                <!-- Recent Activity -->
                <div class="mt-10">
                    <h2 class="text-xl font-semibold text-gray-800 mb-6">Recent Activity</h2>
                    
                    <div class="bg-white rounded-xl shadow-sm p-6">
                        <div class="flow-root">
                            <ul role="list" class="-mb-8">
                                <li>
                                    <div class="relative pb-8">
                                        <span class="absolute top-5 left-5 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                                        <div class="relative flex items-start space-x-3">
                                            <div class="relative">
                                                <div class="h-10 w-10 rounded-full bg-emerald-100 flex items-center justify-center ring-8 ring-white">
                                                    <i class="fas fa-user-plus text-emerald-500"></i>
                                                </div>
                                            </div>
                                            <div class="min-w-0 flex-1">
                                                <div>
                                                    <div class="text-sm font-medium text-gray-900">New volunteer registered</div>
                                                    <p class="mt-0.5 text-sm text-gray-500">Sarah Johnson joined your Beach Cleanup event</p>
                                                </div>
                                                <div class="mt-2 text-sm text-gray-500">
                                                    <p>2 hours ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                
                                <li>
                                    <div class="relative pb-8">
                                        <span class="absolute top-5 left-5 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                                        <div class="relative flex items-start space-x-3">
                                            <div class="relative">
                                                <div class="h-10 w-10 rounded-full bg-emerald-100 flex items-center justify-center ring-8 ring-white">
                                                    <i class="fas fa-calendar-check text-emerald-500"></i>
                                                </div>
                                            </div>
                                            <div class="min-w-0 flex-1">
                                                <div>
                                                    <div class="text-sm font-medium text-gray-900">Event completed</div>
                                                    <p class="mt-0.5 text-sm text-gray-500">Community Garden Planting event was completed successfully</p>
                                                </div>
                                                <div class="mt-2 text-sm text-gray-500">
                                                    <p>Yesterday at 2:30 PM</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                
                                <li>
                                    <div class="relative">
                                        <div class="relative flex items-start space-x-3">
                                            <div class="relative">
                                                <div class="h-10 w-10 rounded-full bg-emerald-100 flex items-center justify-center ring-8 ring-white">
                                                    <i class="fas fa-calendar-plus text-emerald-500"></i>
                                                </div>
                                            </div>
                                            <div class="min-w-0 flex-1">
                                                <div>
                                                    <div class="text-sm font-medium text-gray-900">New event created</div>
                                                    <p class="mt-0.5 text-sm text-gray-500">You created the Food Drive event</p>
                                                </div>
                                                <div class="mt-2 text-sm text-gray-500">
                                                    <p>3 days ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-6 text-center">
                            <a href="#" class="text-sm font-medium text-emerald-600 hover:text-emerald-500">View all activity <i class="fas fa-arrow-right ml-1"></i></a>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>