<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GiveLink Donation History</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-gray-50 font-sans">
    <!-- Main Container -->
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <div class="w-64 bg-emerald-700 text-white">
            <div class="p-6">
                <div class="flex items-center space-x-2 mb-8">
                    <i class="fas fa-hand-holding-heart text-2xl"></i>
                    <span class="text-2xl font-bold">GiveLink</span>
                </div>
                <div class="space-y-1">
                    <a href="../dashboard.php" class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-emerald-600 transition-colors">
                        <i class="fas fa-chart-pie"></i>
                        <span>Dashboard</span>
                    </a>
                    <a href="campaign.php" class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-emerald-600 transition-colors">
                        <i class="fas fa-bullhorn"></i>
                        <span>Campaigns</span>
                    </a>
                    <a href="events.php" class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-emerald-600 transition-colors">
                        <i class="fas fa-calendar-alt"></i>
                        <span>Events</span>
                    </a>
                    <a href="donors.php" class="flex items-center space-x-3 px-4 py-3 rounded-lg bg-emerald-800">
                        <i class="fas fa-heart"></i>
                        <span>Donors</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-emerald-600 transition-colors">
                        <i class="fas fa-users"></i>
                        <span>Volunteers</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-emerald-600 transition-colors">
                        <i class="fas fa-file-alt"></i>
                        <span>Reports</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-emerald-600 transition-colors">
                        <i class="fas fa-cog"></i>
                        <span>Settings</span>
                    </a>
                </div>
            </div>
            <div class="p-6 mt-auto">
                <div class="flex items-center space-x-3 px-4 py-3 rounded-lg bg-emerald-600">
                    <div class="h-8 w-8 rounded-full bg-white text-emerald-700 flex items-center justify-center">
                        <i class="fas fa-user"></i>
                    </div>
                    <div>
                        <p class="text-sm font-medium">Sarah Johnson</p>
                        <p class="text-xs text-emerald-200">Admin</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 overflow-auto">
            <!-- Header -->
            <div class="bg-white border-b p-4 flex justify-between items-center sticky top-0 z-10">
                <div>
                    <h1 class="text-xl font-semibold text-gray-800">Donation History</h1>
                    <p class="text-sm text-gray-500">View donation history for John Doe</p>
                </div>
                <div class="flex items-center space-x-4">
                    <button class="p-2 rounded-full bg-gray-100 text-gray-600 hover:bg-gray-200">
                        <i class="fas fa-bell"></i>
                    </button>
                    <button class="p-2 rounded-full bg-gray-100 text-gray-600 hover:bg-gray-200">
                        <i class="fas fa-envelope"></i>
                    </button>
                    <button class="bg-emerald-100 text-emerald-700 px-4 py-2 rounded-md hover:bg-emerald-200 transition-colors">
                        <i class="fas fa-sign-out-alt mr-2"></i>Logout
                    </button>
                </div>
            </div>

            <div class="p-6">
                <!-- Donation History List -->
                <div class="mb-6">
                    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                        <h2 class="text-lg font-semibold text-gray-800 mb-4">Donations by John Doe</h2>
                        <div class="divide-y">
                            <div class="py-3 flex justify-between items-center">
                                <div>
                                    <p class="font-medium text-gray-700">Save the Forests</p>
                                    <p class="text-sm text-gray-500">April 1, 2025</p>
                                </div>
                                <div>
                                    <p class="font-medium text-emerald-700">$50</p>
                                </div>
                            </div>
                            <div class="py-3 flex justify-between items-center">
                                <div>
                                    <p class="font-medium text-gray-700">Feed the Homeless</p>
                                    <p class="text-sm text-gray-500">March 25, 2025</p>
                                </div>
                                <div>
                                    <p class="font-medium text-emerald-700">$100</p>
                                </div>
                            </div>
                            <div class="py-3 flex justify-between items-center">
                                <div>
                                    <p class="font-medium text-gray-700">Save the Forests</p>
                                    <p class="text-sm text-gray-500">February 15, 2025</p>
                                </div>
                                <div>
                                    <p class="font-medium text-emerald-700">$350</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>