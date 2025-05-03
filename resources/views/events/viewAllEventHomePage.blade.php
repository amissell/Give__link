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
        </div>
        
        
        <form method="GET" action="{{ route('events.search') }}" id="search" class="flex items-center space-x-2 mb-4">
          <input
          type="text"
          name="search"
          id="search"
          placeholder="Search..."
          class="border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring focus:border-blue-300"><button
          type="submit"
          class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Search</button>
        </form>

        


      </div>
    </div>
  </section>


  <section class="section-modern">
    <div class="container mx-auto px-6">
      @if($events->count() > 0)
        <div class="grid gap-8 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4" id="events-list">
          @include('components.event-cards', ['events' => $events])
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
    // Submit search form with AJAX
    document.getElementById('search').addEventListener('submit', function (e) {
      e.preventDefault();

      const query = this.search.value.trim();

      fetch(`{{ route('events.search') }}?search=${encodeURIComponent(query)}`, {
        headers: {
          'X-Requested-With': 'XMLHttpRequest'
        }
      })
      .then(response => response.text())
      .then(html => {
        document.getElementById('events').innerHTML = html;
      })
      .catch(error => console.error('Error:', error));
    });

    // When input is cleared, reload all events
    document.getElementById('search').addEventListener('input', function () {
      if (this.value.trim() === '') {
        document.getElementById('search').requestSubmit();
      }
    });
  </script>
