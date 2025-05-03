<!-- resources/views/events/index.blade.php -->

@extends('layouts.app')

@section('content')
    <!-- Search Form -->
    <form method="GET" action="{{ route('events.search') }}" class="flex items-center space-x-2 mb-4">
        <input
            type="text"
            name="search"
            placeholder="Search for events..."
            class="border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring focus:border-blue-300"
        >
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
            Search
        </button>
    </form>

    <!-- Event List -->
    <section class="events-list">
        @if($events->count() > 0)
            <div class="grid gap-8 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                @foreach($events as $event)
                    <div class="event-card p-4 border rounded shadow-sm">
                        <h3 class="text-xl font-semibold">{{ $event->title }}</h3>
                        <p class="text-gray-600">{{ \Illuminate\Support\Str::limit($event->description, 100) }}</p>
                        <a href="{{ route('events.show', $event->id) }}" class="text-blue-500 mt-2 inline-block">View Details</a>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-center py-12 text-xl text-gray-600">No events found matching your search.</p>
        @endif
    </section>
@endsection
