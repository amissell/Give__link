@extends('layouts.public')

@section('content')
<section class="py-20">
    <div class="container mx-auto px-6">
        <!-- Card Container -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="p-6">
                <!-- Event Image -->
                @if($event->image)  <!-- Check if the image exists -->
                    <img src="{{ asset('storage/' . $event->image) }}" alt="Event Image" class="w-full h-auto rounded-lg mb-4">
                @endif

                <!-- Event Title -->
                <h1 class="text-4xl font-bold text-gray-800">{{ $event->title }}</h1>
                <p class="text-lg text-gray-600 mb-4">{{ $event->description }}</p>

                <!-- Event Details -->
                <div class="space-y-2">
                    <div class="text-gray-600">
                        <strong>Start Date: </strong>{{ \Carbon\Carbon::parse($event->startEventAt)->format('F j, Y') }}
                    </div>
                    <div class="text-gray-600">
                        <strong>Time: </strong>{{ \Carbon\Carbon::parse($event->startEventAt)->format('g:i A') }} - {{ \Carbon\Carbon::parse($event->endEventAt)->format('g:i A') }}
                    </div>
                    <div class="text-gray-600">
                        <strong>Location: </strong>{{ $event->ville ? $event->ville->name : 'Not specified' }}
                    </div>
                    <div class="text-gray-600">
                        <strong>Event Type: </strong>{{ $event->type ?? 'Volunteering' }}
                    </div>
                    <div class="text-gray-600">
                        <strong>Capacity: </strong>{{ $event->capacity ?? 'Unlimited' }}
                    </div>
                    <div class="text-gray-600">
                        <strong>Created: </strong>{{ $event->created_at->diffForHumans() }}
                    </div>
                    <div class="text-gray-600">
                        <strong>Time Left: </strong>
                        @if(\Carbon\Carbon::parse($event->startEventAt)->isPast())
                            In progress
                        @else
                            {{ \Carbon\Carbon::now()->diffForHumans(\Carbon\Carbon::parse($event->startEventAt), true) }}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
