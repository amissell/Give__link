@extends('layouts.app')

@section('title', 'GiveLink')

@section('page-title', 'Manage and Oversee Events')

@section('content')
<div class="p-6 bg-white shadow-md rounded-lg">
  <h1 class="text-2xl font-bold mb-6 text-center text-gray-800">Manage Events</h1>

  <!-- Search and Filters -->
  <div class="mb-6 flex items-center justify-between">
    <div class="flex space-x-4">
      <input type="text" placeholder="Search events..." class="px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" />
      <select class="px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
        <option value="">Filter by Status</option>
        <option value="pending">Pending</option>
        <option value="approved">Approved</option>
        <option value="rejected">Rejected</option>
      </select>
      <select class="px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
        <option value="">Sort by Date</option>
        <option value="upcoming">Upcoming</option>
        <option value="past">Past</option>
      </select>
    </div>
  </div>

  <!-- Event List Table -->
  <table class="min-w-full table-auto border-collapse border border-gray-300">
    <thead>
      <tr class="bg-gray-100 text-gray-700">
        <th class="border px-4 py-3 text-left">Event Name</th>
        <th class="border px-4 py-3 text-left">Organization</th>
        <th class="border px-4 py-3 text-left">Status</th>
        <th class="border px-4 py-3 text-left">Actions</th>
      </tr>
    </thead>
    <tbody>
      <!-- Example Event Row -->
      <tr>
        <td class="border px-4 py-4 text-gray-600">Charity Run</td>
        <td class="border px-4 py-4 text-gray-600">Organization A</td>
        <td class="border px-4 py-4 text-yellow-500">Pending</td>
        <td class="border px-4 py-4">
          <button class="bg-green-500 text-white px-6 py-2 rounded-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-300">
            Approve
          </button>
          <button class="bg-red-500 text-white px-6 py-2 rounded-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-300 ml-4">
            Reject
          </button>
          <a href="{{route("events.show")}}" class="bg-blue-500 text-white px-6 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300 ml-4">
            View Details
          </a>
        </td>
      </tr>
      <!-- Repeat rows as necessary -->
    </tbody>
  </table>

  <!-- Optional Pagination -->
  <div class="mt-6 flex justify-center">
    <button class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300">
      Previous
    </button>
    <button class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300 ml-4">
      Next
    </button>
  </div>
</div>
@endsection
