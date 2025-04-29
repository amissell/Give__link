@extends('layouts.organization-app')

@section('content')
<div class="mb-8 reveal-item">
    <div class="flex flex-col md:flex-row md:items-center md:justify-between">
        <div>
            <h1 class="text-3xl font-bold text-gray-800">
                My <span class="gradient-text">Events</span>
            </h1>
            <p class="text-gray-600 mt-2">Manage and view all your organization's events</p>
        </div>
        
        <div class="mt-4 md:mt-0">
            <a href="{{ route('events.create') }}" class="btn-emerald px-4 py-2 rounded-lg flex items-center shadow-md hover:shadow-lg">
                <i class="fas fa-plus mr-2"></i>
                Create New Event
            </a>
        </div>
    </div>
</div>

@if(count($events) > 0)
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
        @foreach($events as $index => $event)
            <div class="dashboard-card bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-md transition-all duration-300 reveal-item delay-{{ $index % 4 * 100 }}">
                <!-- Event Image -->
                <div class="h-48 bg-cover bg-center relative group" style="background-image: url('{{ asset('storage/' . $event->image) }}');">
                    <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-60 group-hover:opacity-70 transition-opacity"></div>
                    <div class="absolute bottom-3 left-3">
                        <span class="px-2 py-1 bg-emerald-500 text-white text-xs font-medium rounded-full">
                            {{ $event->type }}
                        </span>
                    </div>
                    <div class="absolute top-3 right-3">
                        <span class="px-2 py-1 bg-white text-emerald-700 text-xs font-medium rounded-full flex items-center">
                            <i class="fas fa-users mr-1"></i>
                            {{ $event->capacity ?? 'Unlimited' }}
                        </span>
                    </div>
                </div>

                <div class="p-5">
                    <!-- Date and Time -->
                    <div class="flex justify-between text-sm text-gray-500 mb-2">
                        <div class="flex items-center">
                            <i class="fas fa-calendar-alt text-emerald-500 mr-1"></i>
                            {{ \Carbon\Carbon::parse($event->startEventAt)->format('M d, Y') }}
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-clock text-emerald-500 mr-1"></i>
                            {{ \Carbon\Carbon::parse($event->startEventAt)->format('h:i A') }}
                        </div>
                    </div>

                    <!-- Event Title -->
                    <h2 class="text-xl font-bold text-gray-800 mb-2 hover:text-emerald-600 transition-colors">
                        {{ $event->title }}
                    </h2>

                    <!-- Event Description -->
                    <p class="text-gray-600 text-sm mb-3 line-clamp-2">
                        {{ \Str::limit($event->description, 100) }}
                    </p>

                    <!-- Location -->
                    <div class="flex items-center text-sm text-gray-500 mb-4">
                        <i class="fas fa-map-marker-alt text-emerald-500 mr-2"></i>
                        <span>{{ $event->ville ? $event->ville->name : 'Not specified' }}</span>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex justify-between pt-3 border-t border-gray-100">
                        <a href="{{ route('events.show', $event->id) }}" class="text-emerald-600 hover:text-emerald-700 font-medium text-sm flex items-center">
                            <i class="fas fa-eye mr-1"></i>
                            View Details
                        </a>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
@else
    <div class="bg-white rounded-xl shadow-sm p-10 text-center reveal-item">
        <div class="w-20 h-20 rounded-full bg-emerald-100 flex items-center justify-center mx-auto mb-4">
            <i class="fas fa-calendar-times text-emerald-500 text-2xl"></i>
        </div>
        <h3 class="text-xl font-medium text-gray-800 mb-2">No Events Found</h3>
        <p class="text-gray-500 mb-6">You haven't created any events yet.</p>
        <a href="{{ route('events.create') }}" class="btn-emerald px-4 py-2 rounded-lg inline-flex items-center">
            <i class="fas fa-plus mr-2"></i>
            Create Your First Event
        </a>
    </div>
@endif

<!-- Pagination if needed -->
@if(isset($events) && method_exists($events, 'links') && $events->hasPages())
    <div class="mt-6">
        {{ $events->links() }}
    </div>
@endif

<style>
.line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
</style>
@endsection
