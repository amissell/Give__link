@extends('layouts.organization-app')

@section('content')
<div class="max-w-4xl mx-auto mt-8 p-6 bg-white rounded-lg shadow-lg">
    <div class="flex flex-col md:flex-row bg-gray-50 rounded-lg shadow-md">

            <!-- Event Image -->
            <div class="w-full h-64 bg-top bg-cover rounded-t" style="background-image: url('{{ $event->image ? asset('storage/' . $event->image) : 'https://via.placeholder.com/300x300' }}');"></div>

            <!-- Event Details -->
            <div class="flex flex-col w-full md:flex-row">
                <div class="flex flex-row justify-around p-4 font-bold leading-none text-gray-800 uppercase bg-gray-400 rounded md:flex-col md:items-center md:justify-center md:w-1/4">
                    <div class="md:text-3xl">{{ \Carbon\Carbon::parse($event->startEventAt)->format('M') }}</div>
                    <div class="md:text-6xl">{{ \Carbon\Carbon::parse($event->startEventAt)->format('d') }}</div>
                    <div class="md:text-xl">{{ \Carbon\Carbon::parse($event->startEventAt)->format('h A') }}</div>
                </div>

                <!-- Event Info -->
                <div class="p-4 font-normal text-gray-800 md:w-3/4">
                    <h1 class="mb-4 text-4xl font-bold leading-none tracking-tight text-gray-800">{{ $event->title }}</h1>
                    <p class="leading-normal">{{ $event->description }}</p>

                    <div class="flex flex-row items-center mt-4 text-gray-700">
                        <div class="w-1/2">
                            <strong>Ville:</strong> {{ $event->ville ? $event->ville->name : 'N' }}
                        </div>
                        <div class="w-1/2 flex justify-end">
                            <img src="https://example.com/your-logo.png" alt="Logo" class="w-8">
                        </div>
                    </div>

                    <!-- Action Buttons (if needed) -->
                    <div class="mt-6 flex space-x-4">
                        <a href="{{ route('events.edit', $event->id) }}" class="text-white bg-blue-600 hover:bg-blue-700 rounded-md py-2 px-4">Edit Event</a>
                        <form action="{{ route('events.destroy', $event->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-white bg-red-600 hover:bg-red-700 rounded-md py-2 px-4">Delete Event</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
