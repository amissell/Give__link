@extends('layouts.app')

@section('title', 'Admin Dashboard')
@section('page-title', 'Admin Dashboard Overview')

@section('content')
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">

  <!-- Pending Organizations -->
  <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
    <div class="flex justify-between items-center mb-4">
      <div>
        <p class="text-sm font-medium text-gray-500">Pending Organizations</p>
        <h3 class="text-2xl font-bold text-indigo-700">{{ $pendingOrganizationsCount }}</h3>
      </div>
      <div class="p-3 rounded-full bg-indigo-100 text-indigo-700">
        <i class="fas fa-hourglass-half"></i>
      </div>
    </div>
  </div>

  <!-- Approved Organizations -->
  <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
    <div class="flex justify-between items-center mb-4">
      <div>
        <p class="text-sm font-medium text-gray-500">Approved Organizations</p>
        <h3 class="text-2xl font-bold text-green-600">{{ $approvedOrganizationsCount }}</h3>
      </div>
      <div class="p-3 rounded-full bg-green-100 text-green-600">
        <i class="fas fa-check-circle"></i>
      </div>
    </div>
  </div>

  <!-- Total Users -->
  <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
    <div class="flex justify-between items-center mb-4">
      <div>
        <p class="text-sm font-medium text-gray-500">Total Users</p>
        <h3 class="text-2xl font-bold text-blue-700">{{ $usersCount }}</h3>
      </div>
      <div class="p-3 rounded-full bg-blue-100 text-blue-700">
        <i class="fas fa-users"></i>
      </div>
    </div>
    <a href="{{ route('admin.users.index') }}" class="text-sm text-blue-600 hover:underline">Manage Users</a>
  </div>

  <!-- Total Categories -->
  <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
    <div class="flex justify-between items-center mb-4">
      <div>
        <p class="text-sm font-medium text-gray-500">Categories</p>
        <h3 class="text-2xl font-bold text-yellow-700">{{ $categoriesCount }}</h3>
      </div>
      <div class="p-3 rounded-full bg-yellow-100 text-yellow-700">
        <i class="fas fa-tags"></i>
      </div>
    </div>
    <a href="{{ route('categories.index') }}" class="text-sm text-yellow-600 hover:underline">Manage Categories</a>
  </div>

</div>


@endsection
