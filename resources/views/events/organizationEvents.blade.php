@extends('layouts.organization-app')


@section('content')
    <div class="max-w-7xl mx-auto mt-8 p-6">
        <h1 class="text-4xl font-bold text-center text-gray-800 mb-6">My Event's</h1>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach($events as $event)
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <!-- Event Image -->
                    <div class="h-48 bg-cover bg-center" style="background-image: url('{{ asset('storage/' . $event->image) }}');"></div>

                    <div class="p-4">
                        <div class="flex justify-between text-gray-600">
                            <div>{{ \Carbon\Carbon::parse($event->startEventAt)->format('M d, Y') }}</div>
                            <div>{{ \Carbon\Carbon::parse($event->startEventAt)->format('h:i A') }}</div>
                        </div>

                        <!-- Event Title -->
                        <h2 class="text-xl font-semibold mt-2">{{ $event->title }}</h2>

                        <!-- Event Description -->
                        <p class="text-gray-700 mt-2">{{ \Str::limit($event->description, 100) }}</p>

                        <!-- Event Ville -->
                        <div class="mt-4">
                            <strong>City:</strong> {{ $event->ville ? $event->ville->name : 'Not specified' }}
                        </div>

                        <!-- Event Actions -->
                        <div class="mt-4 flex justify-between">
                            <a href="{{ route('events.show', $event->id) }}" class="text-blue-600 hover:underline">View Details</a>
                            <a href="{{ route('events.edit', $event->id) }}" class="text-yellow-600 hover:underline">Edit</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
