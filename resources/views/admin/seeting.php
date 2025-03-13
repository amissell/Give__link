<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GiveLink Settings</title>
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
                    <a href="reports.php" class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-emerald-600 transition-colors">
                        <i class="fas fa-file-alt"></i>
                        <span>Reports</span>
                    </a>
                    <a href="settings.php" class="flex items-center space-x-3 px-4 py-3 rounded-lg bg-emerald-800">
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
                    <h1 class="text-xl font-semibold text-gray-800">Settings</h1>
                    <p class="text-sm text-gray-500">Manage platform settings</p>
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
                <!-- Settings Form -->
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                    <form>
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700">Platform Name</label>
                            <input type="text" class="mt-1 p-2 w-full border rounded-md" placeholder="Enter platform name">
                        </div>
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700">Email Notifications</label>
                            <select class="mt-1 p-2 w-full border rounded-md">
                                <option value="enabled">Enabled</option>
                                <option value="disabled">Disabled</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700">Default Timezone</label>
                            <select class="mt-1 p-2 w-full border rounded-md">
                                <option value="UTC">UTC</option>
                                <option value="EST">EST</option>
                                <!-- Add more timezones as needed -->
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700">Default User Role</label>
                            <select class="mt-1 p-2 w-full border rounded-md">
                                <option value="donor">Donor</option>
                                <option value="volunteer">Volunteer</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700">Password Policy</label>
                            <input type="text" class="mt-1 p-2 w-full border rounded-md" placeholder="Set password policy">
                        </div>
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700">Site Maintenance Mode</label>
                            <select class="mt-1 p-2 w-full border rounded-md">
                                <option value="enabled">Enabled</option>
                                <option value="disabled">Disabled</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700">Google Analytics Tracking ID</label>
                            <input type="text" class="mt-1 p-2 w-full border rounded-md" placeholder="UA-XXXXXXXX-X">
                        </div>
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700">Custom CSS/JS</label>
                            <textarea class="mt-1 p-2 w-full border rounded-md" placeholder="Enter custom CSS or JS"></textarea>
                        </div>
                        <div class="flex justify-end">
                            <button type="submit" class="px-4 py-2 bg-emerald-600 text-white rounded-md hover:bg-emerald-700 transition-colors">Save Settings</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
