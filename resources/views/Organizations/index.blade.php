@extends('layouts.app')

@section('title', 'Manage Organizations')

@section('page-title', 'Manage Organizations and Approve/Reject Registrations')

@section('content')
<div class="p-6 bg-white shadow-md rounded-lg">

  <!-- Title Section -->
  <h1 class="text-2xl font-bold mb-6 mt-12 text-center text-gray-800">Manage Organizations</h1>

  <!-- Search and Filters for Organizations -->
  <div class="mb-6 flex items-center justify-between">
    <div class="flex space-x-4">
      <input type="text" placeholder="Search organizations..." class="px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" />
      <select class="px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
        <option value="">Filter by Status</option>
        <option value="pending">Pending</option>
        <option value="accepted">Accepted</option>
        <option value="rejected">Rejected</option>
      </select>
      <select class="px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
        <option value="">Sort by Date</option>
        <option value="recent">Recent</option>
        <option value="oldest">Oldest</option>
      </select>
    </div>
  </div>

  <!-- Organization List Table -->
  <table class="min-w-full table-auto border-collapse border border-gray-300">
    <thead>
      <tr class="bg-gray-100 text-gray-700">
        <th class="border px-4 py-3 text-left">Organization Name</th>
        <th class="border px-4 py-3 text-left">Category</th>
        <th class="border px-4 py-3 text-left">Mission</th>
        <th class="border px-4 py-3 text-left">Status</th>
        <th class="border px-4 py-3 text-left">Actions</th>
      </tr>
    </thead>
    <tbody>
      <!-- Example Organization Row -->
      <tr>
        <td class="border px-4 py-4 text-gray-600">Non-Profit Org</td>
        <td class="border px-4 py-4 text-gray-600">Health & Wellness</td>
        <td class="border px-4 py-4 text-gray-600">Dedicated to improving mental health in underprivileged areas.</td>
        <td class="border px-4 py-4 text-yellow-500">Pending</td>
        <td class="border px-4 py-4">
          <button class="bg-green-500 text-white px-6 py-2 rounded-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-300">
            Approve
          </button>
          <button class="bg-red-500 text-white px-6 py-2 rounded-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-300 ml-4">
            Reject
          </button>
          <button class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300 ml-4" onclick="toggleDetails('details-1')">
            View Details
          </button>
        </td>
      </tr>

      <!-- Example Expanded Details Section -->
      <tr id="details-1" class="bg-gray-50 hidden">
        <td colspan="5" class="border px-4 py-4 text-gray-600">
          <p><strong>Contact Email:</strong> example@nonprofit.org</p>
          <p><strong>Contact Phone:</strong> +1 (555) 123-4567</p>
          <p><strong>Website:</strong> <a href="https://example.com" class="text-blue-500">example.com</a></p>
          <p><strong>Registration Document:</strong> <a href="#" class="text-blue-500">View Document</a></p>
        </td>
      </tr>

      <!-- Another Example Organization Row -->
      <tr>
        <td class="border px-4 py-4 text-gray-600">Green Earth</td>
        <td class="border px-4 py-4 text-gray-600">Environment</td>
        <td class="border px-4 py-4 text-gray-600">Focused on reforestation and combating climate change.</td>
        <td class="border px-4 py-4 text-green-500">Accepted</td>
        <td class="border px-4 py-4">
          <span class="text-green-500">Approved</span>
        </td>
      </tr>
    </tbody>
  </table>

  <!-- Optional Pagination for Organizations -->
  <div class="mt-6 flex justify-center">
    <button class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300">
      Previous
    </button>
    <button class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300 ml-4">
      Next
    </button>
  </div>
</div>

<script>
  // Toggle the visibility of the organization's details
  function toggleDetails(id) {
    const detailsRow = document.getElementById(id);
    detailsRow.classList.toggle('hidden');
  }
</script>

@endsection
