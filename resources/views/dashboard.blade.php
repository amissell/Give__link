@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('page-title', 'Admin Dashboard Overview')

@section('content')
<!-- Stats Cards -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
  <!-- Pending Organizations -->
  <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
    <div class="flex justify-between items-center mb-4">
      <div>
        <p class="text-sm font-medium text-gray-500">Pending Organizations</p>
        <h3 class="text-2xl font-bold text-indigo-700"></h3>
      </div>
      <div class="p-3 rounded-full bg-indigo-100 text-indigo-700">
        <i class="fas fa-users"></i>
      </div>
    </div>
    <a href="" class="text-sm text-indigo-600 hover:underline">View Pending</a>
  </div>
  
  <!-- Pending Events -->
  <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
    <div class="flex justify-between items-center mb-4">
      <div>
        <p class="text-sm font-medium text-gray-500">Pending Events</p>
        <h3 class="text-2xl font-bold text-amber-600"></h3>
      </div>
      <div class="p-3 rounded-full bg-amber-100 text-amber-600">
        <i class="fas fa-calendar-alt"></i>
      </div>
    </div>
    <a href="" class="text-sm text-amber-600 hover:underline">View Pending</a>
  </div>
  
  <!-- Pending Donations -->
  <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
    <div class="flex justify-between items-center mb-4">
      <div>
        <p class="text-sm font-medium text-gray-500">Pending Donations</p>
        <h3 class="text-2xl font-bold text-emerald-700"></h3>
      </div>
      <div class="p-3 rounded-full bg-emerald-100 text-emerald-700">
        <i class="fas fa-dollar-sign"></i>
      </div>
    </div>
    <a href="" class="text-sm text-emerald-600 hover:underline">View Pending</a>
  </div>
  
  <!-- Total Organizations -->
  <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
    <div class="flex justify-between items-center mb-4">
      <div>
        <p class="text-sm font-medium text-gray-500">Total Organizations</p>
        <h3 class="text-2xl font-bold text-indigo-700"></h3>
      </div>
      <div class="p-3 rounded-full bg-indigo-100 text-indigo-700">
        <i class="fas fa-users"></i>
      </div>
    </div>
  </div>
</div>

<!-- Quick Actions Section -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
  <!-- Accept Organization -->
  <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
    <h3 class="text-xl font-semibold text-gray-800 mb-4">Accept New Organizations</h3>
    <a href="" class="block text-lg text-indigo-600 hover:underline">View and Accept Organizations</a>
  </div>

  <!-- Accept Event -->
  <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
    <h3 class="text-xl font-semibold text-gray-800 mb-4">Accept Upcoming Events</h3>
    <a href="" class="block text-lg text-amber-600 hover:underline">View and Accept Events</a>
  </div>

  <!-- Accept Donations -->
  <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
    <h3 class="text-xl font-semibold text-gray-800 mb-4">Accept Donations</h3>
    <a href="" class="block text-lg text-emerald-600 hover:underline">View and Accept Donations</a>
  </div>
</div>

@endsection
