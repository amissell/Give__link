@extends('layouts.app')

@section('title', 'Pending Donations')

@section('content')
<h2 class="text-2xl font-semibold text-gray-800 mb-6">Pending Donations</h2>

<!-- Display Pending Donations here -->
@foreach($pendingDonations as $donation)
  <div class="border-b mb-4 pb-4">
    <h3 class="font-medium text-xl">${{ number_format($donation->amount, 2) }}</h3>
    <p>Status: {{ $donation->status }}</p>
    <a href="{{ route('admin.donations.accept', $donation->id) }}" class="text-blue-600">Accept</a>
    <a href="{{ route('admin.donations.reject', $donation->id) }}" class="text-red-600">Reject</a>
  </div>
@endforeach

@endsection
