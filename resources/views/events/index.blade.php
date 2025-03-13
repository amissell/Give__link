@extends('layouts.app')

@section('title', 'GiveLink')

@section('page-title', 'Manage and oversee events')

@section('content')


<div class="p-6">
  <div class="mb-6">
    <h2 class="text-xl font-semibold text-gray-800 mb-4">Upcoming Events</h2>
    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
      <div class="flex items-center justify-between mb-4">
        <div class="flex items-center space-x-4">
          <div class="h-12 w-12 rounded-lg bg-indigo-100 flex items-center justify-center">
            <i class="fas fa-calendar-alt text-indigo-700"></i>
          </div>
          <div>
            <h3 class="font-semibold">Beach Cleanup</h3>
            <p class="text-sm text-gray-500">Environmental Event</p>
          </div>
        </div>
        <div class="flex space-x-2">
          <button class="px-4 py-2 bg-gray-100 text-gray-700 rounded-md text-sm hover:bg-gray-200 transition-colors">Edit</button>
          <button class="px-4 py-2 bg-red-100 text-red-700 rounded-md text-sm hover:bg-red-200 transition-colors">Delete</button>
          <button class="px-4 py-2 bg-gray-100 text-gray-700 rounded-md text-sm hover:bg-gray-200 transition-colors">Approve</button>
        </div>
      </div>
      <div class="flex justify-between text-sm text-gray-600 mb-4">
        <p>Date: April 10, 2025</p>
        <p>Location: Miami Beach</p>
      </div>
      <div class="text-sm text-gray-600">
        <p>Volunteers: 24</p>
      </div>
    </div>
  </div>

  <div class="mb-6">
    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
      <div class="flex items-center justify-between mb-4">
        <div class="flex items-center space-x-4">
          <div class="h-12 w-12 rounded-lg bg-indigo-100 flex items-center justify-center">
            <i class="fas fa-calendar-alt text-indigo-700"></i>
          </div>
          <div>
            <h3 class="font-semibold">Food Bank Distribution</h3>
            <p class="text-sm text-gray-500">Community Support</p>
          </div>
        </div>
        <div class="flex space-x-2">
          <button class="px-4 py-2 bg-gray-100 text-gray-700 rounded-md text-sm hover:bg-gray-200 transition-colors">Edit</button>
          <button class="px-4 py-2 bg-red-100 text-red-700 rounded-md text-sm hover:bg-red-200 transition-colors">Delete</button>
          <button class="px-4 py-2 bg-gray-100 text-gray-700 rounded-md text-sm hover:bg-gray-200 transition-colors">Approve</button>
        </div>
      </div>
      <div class="flex justify-between text-sm text-gray-600 mb-4">
        <p>Date: April 15, 2025</p>
        <p>Location: Central Park</p>
      </div>
      <div class="text-sm text-gray-600">
        <p>Volunteers: 42</p>
      </div>
    </div>
  </div>
</div>

@endsection