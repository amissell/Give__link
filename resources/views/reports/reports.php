<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GiveLink Reports</title>
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
                    <a href="donors.php" class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-emerald-600 transition-colors">
                        <i class="fas fa-heart"></i>
                        <span>Donors</span>
                    </a>
                    <a href="volunteers.php" class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-emerald-600 transition-colors">
                        <i class="fas fa-users"></i>
                        <span>Volunteers</span>
                    </a>
                    <a href="reports.php" class="flex items-center space-x-3 px-4 py-3 rounded-lg bg-emerald-800">
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
                    <h1 class="text-xl font-semibold text-gray-800">Reports</h1>
                    <p class="text-sm text-gray-500">Generate and view reports</p>
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
                <!-- Report Options -->
                <div class="mb-6">
                    <h2 class="text-xl font-semibold text-gray-800 mb-4">Generate Report</h2>
                    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                        <form>
                            <div class="mb-4">
                                <label class="block text-sm font-medium text-gray-700">Report Type</label>
                                <select class="mt-1 p-2 w-full border rounded-md">
                                    <option value="donations">Donations</option>
                                    <option value="events">Events</option>
                                    <option value="volunteers">Volunteers</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label class="block text-sm font-medium text-gray-700">Date Range</label>
                                <div class="flex space-x-2">
                                    <input type="date" class="mt-1 p-2 w-full border rounded-md" placeholder="Start Date">
                                    <input type="date" class="mt-1 p-2 w-full border rounded-md" placeholder="End Date">
                                </div>
                            </div>
                            <div class="flex justify-end">
                                <button type="submit" class="px-4 py-2 bg-emerald-600 text-white rounded-md hover:bg-emerald-700 transition-colors">Generate Report</button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Report Results -->
                <div class="mb-6">
                    <h2 class="text-xl font-semibold text-gray-800 mb-4">Report Results</h2>
                    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead>
                                    <tr>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Report Type</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date Range</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">Donations</td>
                                        <td class="px-6 py-4 whitespace-nowrap">Jan 1, 2025 - Jan 31, 2025</td>
                                        <td class="px-6 py-4 whitespace-nowrap">$10,000</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <button class="px-4 py-2 bg-blue-100 text-blue-700 rounded-md text-sm hover:bg-blue-200 transition-colors">View</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">Events</td>
                                        <td class="px-6 py-4 whitespace-nowrap">Feb 1, 2025 - Feb 28, 2025</td>
                                        <td class="px-6 py-4 whitespace-nowrap">5 Events</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <button class="px-4 py-2 bg-blue-100 text-blue-700 rounded-md text-sm hover:bg-blue-200 transition-colors">View</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
