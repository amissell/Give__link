@extends('layouts.app')

@section('title', 'Pending Events')

@section('content')
<h2 class="text-2xl font-semibold text-gray-800 mb-6">Pending Events</h2>

<!-- Display Pending Events here -->
@foreach($pendingEvents as $event)
  <div class="border-b mb-4 pb-4">
    <h3 class="font-medium text-xl">{{ $event->title }}</h3>
    <p>Status: {{ $event->status }}</p>
    <a href="{{ route('admin.events.accept', $event->id) }}" class="text-blue-600">Accept</a>
    <a href="{{ route('admin.events.reject', $event->id) }}" class="text-red-600">Reject</a>
  </div>
@endforeach

@endsection
