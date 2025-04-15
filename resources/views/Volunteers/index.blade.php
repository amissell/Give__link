@extends('layouts.app')

@section('title', 'GiveLink')

@section('page-title', 'Manage and oversee volunteer sign-ups')

@section('content')
<div class="p-6">
  <div class="mb-6">
    <h2 class="text-xl font-semibold text-gray-800 mb-4">Volunteer Profiles</h2>
    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
      <div class="flex items-center justify-between mb-4">
        <div class="flex items-center space-x-4">
          <div class="h-12 w-12 rounded-full bg-gray-100 flex items-center justify-center">
            <i class="fas fa-user text-gray-500"></i>
          </div>
          <div>
            <h3 class="font-semibold">Alice Johnson</h3>
            <p class="text-sm text-gray-500">Volunteer since 2023</p>
            <p class="text-sm text-gray-500">Status: <span class="font-semibold text-green-600">Active</span></p>
          </div>
        </div>
        <div class="flex space-x-2">
          <button class="px-4 py-2 bg-gray-100 text-gray-700 rounded-md text-sm hover:bg-gray-200 transition-colors">Manage Events</button>
          <button onclick="return confirm('Are you sure you want to remove this volunteer from the event?')" class="px-4 py-2 bg-red-100 text-red-700 rounded-md text-sm hover:bg-red-200 transition-colors">Remove from Event</button>
        </div>
      </div>
      <div class="text-sm text-gray-600">
        <p>Total Events: 5</p>
        <p>Last Event: Beach Cleanup</p>
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
            <h3 class="font-semibold">Bob Smith</h3>
            <p class="text-sm text-gray-500">Volunteer since 2022</p>
            <p class="text-sm text-gray-500">Status: <span class="font-semibold text-red-600">Suspended</span></p>
          </div>
        </div>
        <div class="flex space-x-2">
          <button class="px-4 py-2 bg-gray-100 text-gray-700 rounded-md text-sm hover:bg-gray-200 transition-colors">Manage Events</button>
          <button onclick="return confirm('Are you sure you want to remove this volunteer from the event?')" class="px-4 py-2 bg-red-100 text-red-700 rounded-md text-sm hover:bg-red-200 transition-colors">Remove from Event</button>
        </div>
      </div>
      <div class="text-sm text-gray-600">
        <p>Total Events: 10</p>
        <p>Last Event: Food Bank Distribution</p>
      </div>
    </div>
  </div>
</div>
@endsection
