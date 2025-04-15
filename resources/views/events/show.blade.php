@extends('layouts.app')

@section('title', 'Event Details')

@section('page-title', 'Event Details')

@section('content')
<div class="p-6 bg-white shadow-md rounded-lg">
  <h1 class="text-2xl font-bold mb-6 text-center text-gray-800">{{ $event->name }}</h1>

  <div class="mb-6">
    <h3 class="text-xl font-semibold text-gray-800">Event Information</h3>
    <p class="text-gray-600"><strong>Organization:</strong> {{ $event->organization->name }}</p>
    <p class="text-gray-600"><strong>Status:</strong> {{ ucfirst($event->status) }}</p>
    <p class="text-gray-600"><strong>Date:</strong> {{ $event->event_date->format('F j, Y') }}</p>
    <p class="text-gray-600"><strong>Location:</strong> {{ $event->location }}</p>
    <p class="text-gray-600"><strong>Description:</strong> {{ $event->description }}</p>
  </div>

  <div class="flex justify-end">
    <form action="{{ route('admin.events.accept', $event->id) }}" method="POST">
      @csrf
      <button type="submit" class="bg-green-500 text-white px-6 py-2 rounded-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-300">
        Accept
      </button>
    </form>
    <form action="{{ route('admin.events.reject', $event->id) }}" method="POST" class="ml-4">
      @csrf
      <button type="submit" class="bg-red-500 text-white px-6 py-2 rounded-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-300">
        Reject
      </button>
    </form>
  </div>
</div>
@endsection
