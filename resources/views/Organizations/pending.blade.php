@extends('layouts.app')

@section('title', 'Pending Organizations')

@section('content')
<h2 class="text-2xl font-semibold text-gray-800 mb-6">Pending Organizations</h2>

<!-- Display Pending Organizations here -->
@foreach($pendingOrganizations as $organization)
  <div class="border-b mb-4 pb-4">
    <h3 class="font-medium text-xl">{{ $organization->name }}</h3>
    <p>Status: {{ $organization->status }}</p>
    <a href="{{ route('admin.organizations.accept', $organization->id) }}" class="text-blue-600">Accept</a>
    <a href="{{ route('admin.organizations.reject', $organization->id) }}" class="text-red-600">Reject</a>
  </div>
@endforeach

@endsection
