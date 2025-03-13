  @extends('layouts.app')

  @section('title', 'GiveLink')

  @section('page-title', 'Manage and oversee donors')

  @section('content')

  <div class="p-6">
    <div class="mb-6">
      <h2 class="text-xl font-semibold text-gray-800 mb-4">Donor Profiles</h2>
      <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
        <div class="flex items-center justify-between mb-4">
          <div class="flex items-center space-x-4">
            <div class="h-12 w-12 rounded-full bg-gray-100 flex items-center justify-center">
              <i class="fas fa-user text-gray-500"></i>
            </div>
            <div>
              <h3 class="font-semibold">John Doe</h3>
              <p class="text-sm text-gray-500">Donor since 2022</p>
            </div>
          </div>
          <div class="flex space-x-2">
            <button class="px-4 py-2 bg-gray-100 text-gray-700 rounded-md text-sm hover:bg-gray-200 transition-colors">View History</button>
            <button class="px-4 py-2 bg-red-100 text-red-700 rounded-md text-sm hover:bg-red-200 transition-colors">Delete</button>
          </div>
        </div>
        <div class="text-sm text-gray-600">
          <p>Total Donations: $500</p>
          <p>Last Donation: 2 hours ago</p>
        </div>
      </div>
    </div>

    <div class="mb-6">
      <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
        <div class="flex items-center justify-between mb-4">
          <div class="flex items-center space-x-4">
            <div class="h-12 w-12 rounded-full bg-gray-100 flex items-center justify-center">
              <i class="fas fa-user text-gray-500"></i>
            </div>
            <div>
              <h3 class="font-semibold">Jane Smith</h3>
              <p class="text-sm text-gray-500">Donor since 2021</p>
            </div>
          </div>
          <div class="flex space-x-2">
            <a href="donation_history.php" <button class="px-4 py-2 bg-gray-100 text-gray-700 rounded-md text-sm hover:bg-gray-200 transition-colors">View History</button></a>
            <button class="px-4 py-2 bg-red-100 text-red-700 rounded-md text-sm hover:bg-red-200 transition-colors">Delete</button>
          </div>
        </div>
        <div class="text-sm text-gray-600">
          <p>Total Donations: $2,000</p>
          <p>Last Donation: 5 hours ago</p>
        </div>
      </div>
    </div>
  </div>
  @endsection