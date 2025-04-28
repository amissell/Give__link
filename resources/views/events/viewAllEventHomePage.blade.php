@extends('layouts.public')

@section('content')
<!-- Events Header Section -->
<section class="relative py-20 bg-gradient-to-r from-emerald-500 to-teal-600 overflow-hidden">
  <!-- Background elements -->
  <div class="absolute inset-0 bg-[url('/images/hero-pattern.svg')] opacity-20"></div>
  
  <div class="container mx-auto px-6 relative z-10 text-center">
    <h1 class="text-4xl md:text-5xl font-bold mb-4 text-green-400">Upcoming Events</h1>
    <p class="text-xl text-green-400 opacity-90 max-w-2xl mx-auto">
      Discover opportunities to connect, volunteer, and make an impact in communities worldwide.
    </p>
  </div>
  
  <div class="absolute bottom-0 left-0 right-0">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="w-full h-auto">
      <path fill="#ffffff" fill-opacity="1" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,122.7C672,117,768,139,864,149.3C960,160,1056,160,1152,138.7C1248,117,1344,75,1392,53.3L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
  </div>
</section>

<!-- Filter Section (Optional) -->
<section class="py-8 bg-gray-50">
  <div class="container mx-auto px-6">
    <div class="flex flex-wrap items-center justify-between gap-4">
      <!-- Filter Dropdown (You can expand this) -->
      <div class="flex flex-wrap gap-4 items-center">
        <span class="text-gray-600 font-medium">Filter by:</span>
        <select class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent bg-white">
          <option value="">All Categories</option>
          <option value="education">Education</option>
          <option value="environment">Environment</option>
          <option value="health">Health</option>
          <option value="community">Community</option>
        </select>
        
        <select class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent bg-white">
          <option value="">All Locations</option>
          <!-- You can populate this dynamically with your available locations -->
        </select>
      </div>
      
      <!-- Search -->
      <div class="relative">
        <input 
          type="text" 
          placeholder="Search events..." 
          class="pl-10 pr-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent w-full"
        >
        <svg class="w-5 h-5 text-gray-500 absolute left-3 top-1/2 transform -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
        </svg>
      </div>
    </div>
  </div>
</section>

<!-- Events List -->
<section class="section-modern">
  <div class="container mx-auto px-6">
    @if($events->count() > 0)
      <div class="grid gap-8 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
        @foreach($events as $index => $event)
          <div class="modern-card reveal-item delay-{{ $index % 4 * 100 }}">
            <div class="h-48 overflow-hidden relative group">
              <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-60 group-hover:opacity-80 transition-opacity duration-300"></div>
              <div class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700 ease-in-out" style="background-image: url('{{ asset('storage/' . $event->image) }}'); background-size: cover; background-position: center;"></div>
              <div class="absolute bottom-4 left-4 bg-[#10B981] text-green-400 px-3 py-1 rounded-full text-sm font-medium">
                {{ \Carbon\Carbon::parse($event->startEventAt)->format('M j') }}
              </div>
            </div>
            <div class="p-6">
              <h3 class="text-xl font-bold mb-2 text-gray-800 hover:text-[#10B981] transition-colors duration-300">{{ $event->title }}</h3>
              <p class="text-gray-600 mb-4">{{ Str::limit($event->description, 100) }}</p>
              
              <!-- Date and Location -->
              <div class="flex items-center text-sm text-gray-600 mb-2">
                <svg class="w-4 h-4 mr-2 text-[#10B981]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
                <span>{{ \Carbon\Carbon::parse($event->startEventAt)->format('F j, Y') }}</span>
              </div>
              <div class="flex items-center text-sm text-gray-600 mb-4">
                <svg class="w-4 h-4 mr-2 text-[#10B981]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
                <span>{{ $event->ville_id }}</span>
              </div>

              <!-- Event Details Link -->
              <a href="{{ route('events.show', $event->id) }}" class="mt-2 inline-block text-[#10B981] font-medium hover:underline relative overflow-hidden group">
                <span class="relative z-10">Learn more</span>
                <span class="inline-block ml-1 transition-transform duration-300 transform group-hover:translate-x-1">→</span>
                <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#10B981] transition-all duration-300 group-hover:w-full"></span>
              </a>
              
              @auth
                @if(auth()->user()->hasRole('Volunteer'))
                  <a href="{{ route('joinEvent', $event->id) }}" class="mt-4 inline-block text-white bg-green-500 py-2 px-4 rounded-lg hover:bg-green-600">Join Event</a>
                @else
                  <a href="{{ route('register') }}" class="mt-4 inline-block text-white bg-green-500 py-2 px-4 rounded-lg hover:bg-green-600">Become a Volunteer</a>
                @endif
              @endauth
            </div>
          </div>
        @endforeach
      </div>
    @else
      <div class="text-center py-12">
        <p class="text-xl text-gray-600">No events found.</p>
      </div>
    @endif
  </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-gray-50 border-t border-gray-200">
  <div class="container mx-auto px-6">
    <div class="max-w-3xl mx-auto text-center">
      <h2 class="text-3xl font-bold mb-4 text-gray-800">Want to Host Your Own Event?</h2>
      <p class="text-lg text-gray-600 mb-8">
        Are you an organization looking to host an event? Join our platform to create and promote your events to a community of passionate people.
      </p>
      <div class="flex flex-wrap justify-center gap-4">
        <a href="{{ route('register') }}" class="btn-modern btn-modern-primary">
          Register Now
        </a>
        <a href="#" class="btn-modern btn-modern-outline border-gray-400 text-gray-700 hover:bg-gray-100">
          Learn More
        </a>
      </div>
    </div>
  </div>
</section>

<script>
  // Event filtering functionality
  document.addEventListener('DOMContentLoaded', function() {
    const revealItems = document.querySelectorAll('.reveal-item');
    
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('revealed');
        }
      });
    }, {
      threshold: 0.1
    });
    
    revealItems.forEach(item => {
      observer.observe(item);
    });
  });
</script>
@endsection
