@if($events->count())
  @foreach($events as $index => $event)
    <div class="modern-card reveal-item delay-{{ $index % 4 * 100 }}">
      <img src="{{ asset('storage/' . $event->image) }}" alt="Event Image" class="rounded-t-lg w-full h-48 object-cover">
      <div class="p-4">
        <h3 class="text-lg font-semibold text-gray-800">{{ $event->title }}</h3>
        <p class="text-sm text-gray-600 mt-2">{{ $event->description }}</p>
        <div class="mt-4 flex items-center justify-between text-sm text-gray-600">
          <span><i class="fas fa-calendar-alt mr-1"></i>{{ \Carbon\Carbon::parse($event->startEventAt)->format('d M Y') }}</span>
          <span><i class="fas fa-calendar-alt mr-1"></i>{{ \Carbon\Carbon::parse($event->endEventAt)->format('d M Y') }}</span>
          <span><i class="fas fa-map-marker-alt mr-1"></i>{{ $event->ville->nom }}</span>
        </div>
        <form action="{{ route('Volunteers.joinEvent', $event->id) }}" method="POST" class="mt-4">
          @csrf
          <button type="submit" class="join-button w-full bg-teal-500 text-white py-2 px-4 rounded hover:bg-teal-600 transition-colors">
            Join
          </button>
        </form>
      </div>
    </div>
  @endforeach
@else
  <div class="text-center py-12 w-full col-span-full">
    <p class="text-xl text-gray-600">No events found.</p>
  </div>
@endif
