@extends('layouts.app')

@section('title', 'Organization Details')

@section('page-title', 'Organization Details')

@section('content')
<div class="p-6 bg-white shadow-md rounded-lg">

  <!-- Title Section -->
  <h1 class="text-2xl font-bold mb-6 mt-12 text-center text-gray-800">Organization Details</h1>

  <!-- Organization Details Section -->
  <div class="mb-6">
    <h2 class="text-xl font-semibold text-gray-700">Organization Information</h2>
    <p><strong>Name:</strong> {{ $organization->name }}</p>
    <p><strong>Category:</strong> {{ $organization->category }}</p>
    <p><strong>Mission:</strong> {{ $organization->mission }}</p>
    <p><strong>Contact Email:</strong> {{ $organization->contact_email }}</p>
    <p><strong>Phone Number:</strong> {{ $organization->contact_phone }}</p>
    <p><strong>Website:</strong> <a href="{{ $organization->website }}" class="text-blue-500">{{ $organization->website }}</a></p>
    <p><strong>Registration Document:</strong> <a href="{{ asset('documents/' . $organization->registration_document) }}" class="text-blue-500" target="_blank">View Document</a></p>
  </div>

  <!-- Admin Decision Section -->
  <div class="flex space-x-4">
    <button class="bg-green-500 text-white px-6 py-2 rounded-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-300">
      Approve
    </button>
    <button class="bg-red-500 text-white px-6 py-2 rounded-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-300">
      Reject
    </button>
  </div>

  <!-- Back to Dashboard Button -->
  <div class="mt-6 text-center">
    <a href="{{ route('admin.dashboard') }}" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300">
      Back to Dashboard
    </a>
  </div>

</div>
@endsection
