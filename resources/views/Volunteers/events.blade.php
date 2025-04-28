@extends('layouts.public')

@section('content')
<section class="py-20 px-6 bg-white">
  <div class="container mx-auto">

    <h2 class="text-3xl font-bold text-center mb-8 text-gray-800">My Events</h2>

    <!-- Filter Buttons -->
    <div class="text-center mb-10">
      <a href="#"
         class="px-4 py-2 mx-2 {{ $filter == 'upcoming' ? 'bg-green-600 text-white' : 'bg-gray-200' }} rounded-lg">Upcoming</a>

      <a href="#"
         class="px-4 py-2 mx-2 {{ $filter == 'past' ? 'bg-green-600 text-white' : 'bg-gray-200' }} rounded-lg">Past</a>
    </div>

    <!-- Events List -->
    <div class="grid gap-8 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
      @forelse($events as $event)
        <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transform hover:-translate-y-1">
          <div class="h-48 relative">
            <img src="{{ $event->image_url }}" alt="" class="w-full h-full object-cover">
            <div class="absolute top-2 right-2">
              @if($event->volunteers->count() >= $event->capacity)
                <span class="bg-red-600 text-white px-3 py-1 rounded-full text-xs">Event Full</span>
              @endif
            </div>
          </div>
          <div class="p-6">
            <h3 class="text-xl font-bold text-gray-800 mb-2">{{ $event->title }}</h3>
            <p class="text-sm text-gray-600 mb-2"><strong>Date:</strong> {{ \Carbon\Carbon::parse($event->startEventAt)->format('F j, Y') }}</p>
            <p class="text-sm text-gray-600 mb-2"><strong>Location:</strong> {{ $event->ville->name }}</p>

            <!-- Progress -->
            <div class="mb-2">
              <p class="text-sm text-gray-600">Progress: {{ $event->volunteers->count() }} / {{ $event->capacity }} Volunteers</p>
              <div class="w-full bg-gray-200 rounded-full h-2 mt-1">
                <div class="bg-green-500 h-2 rounded-full" style="width: {{ min(100, ($event->volunteers->count() / $event->capacity) * 100) }}%"></div>
              </div>
            </div>

            <!-- Cancel Participation -->
            <form action="{{ route('volunteer.events.cancel', $event->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to leave this event?');">
              @csrf
              <button type="submit" class="mt-3 text-red-600 text-sm hover:underline">Cancel Participation</button>
            </form>
          </div>
        </div>
      @empty
        <div class="col-span-3 text-center text-gray-500">You haven’t joined any events yet.</div>
      @endforelse
    </div>

  </div>
</section>




@endsection
