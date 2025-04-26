@extends('layouts.public')

@section('content')

@auth
    <div class="text-right mb-6">
        <a href="{{ route('login') }}"
           class="bg-emerald-600 text-white px-4 py-2 rounded hover:bg-emerald-700 transition">
            Register Your Organization
        </a>
    </div>
@endauth


<!-- Hero Section -->
<section id="hero" class="relative">
  <!-- Background with overlay -->
  <div class="absolute inset-0 bg-gradient-to-r from-emerald-500 to-teal-600 opacity-90"></div>
  <div class="absolute inset-0 bg-[url('/images/hero-pattern.svg')] opacity-20"></div>
  
  <div class="relative container mx-auto px-6 py-32 text-center">
    <div class="max-w-3xl mx-auto">
      <h1 class="text-5xl md:text-6xl font-extrabold mb-6 leading-tight text-green-500">Give. Connect. <span class="text-teal-200">Impact.</span></h1>
      <p class="text-xl md:text-2xl text-green-500 mb-8 leading-relaxed">Connecting passionate people with causes that matter. Make a meaningful difference in communities across the globe.</p>
      
      <div class="flex flex-col sm:flex-row justify-center gap-4 mt-8">
        <a href="{{ route('register') }}" class="bg-white text-[#10B981] px-8 py-4 rounded-full text-lg font-semibold hover:bg-teal-50 transition shadow-lg">
          Get Started
        </a>
        <a href="#how-it-works" class="border-2 border-white text-green-500 px-8 py-4 rounded-full text-lg font-semibold hover:bg-white hover:bg-opacity-10 transition">
          Learn How
        </a>
      </div>
      
      <div class="mt-12 text-green-500 text-sm">
        <p class="mb-3 font-medium uppercase tracking-wider">Trusted by organizations worldwide</p>
        <div class="flex flex-wrap justify-center items-center gap-8 opacity-80">
          <div class="py-2 flex items-center">
            <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path>
            </svg>
            <span>World Relief</span>
          </div>
          <div class="py-2 flex items-center">
            <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path>
            </svg>
            <span>Care International</span>
          </div>
          <div class="py-2 flex items-center">
            <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
              <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path>
            </svg>
            <span>Future Vision</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- How It Works Section -->
<section id="how-it-works" class="py-20 bg-white">
  <div class="container mx-auto px-6">
    <div class="text-center mb-16">
      <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-800">How GiveLink Works</h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">Our platform makes it simple to find and support causes you care about.</p>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
      <!-- Step 1 -->
      <div class="text-center">
        <div class="w-20 h-20 bg-teal-50 rounded-full flex items-center justify-center mx-auto mb-6">
          <svg class="w-10 h-10 text-[#10B981]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
          </svg>
        </div>
        <h3 class="text-xl font-bold mb-3 text-gray-800">Discover</h3>
        <p class="text-gray-600 leading-relaxed">Browse through verified organizations and causes that align with your values and interests.</p>
      </div>
      
      <!-- Step 2 -->
      <div class="text-center">
        <div class="w-20 h-20 bg-teal-50 rounded-full flex items-center justify-center mx-auto mb-6">
          <svg class="w-10 h-10 text-[#10B981]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"></path>
          </svg>
        </div>
        <h3 class="text-xl font-bold mb-3 text-gray-800">Connect</h3>
        <p class="text-gray-600 leading-relaxed">Engage directly with organizations and participate in meaningful events and campaigns.</p>
      </div>
      
      <!-- Step 3 -->
      <div class="text-center">
        <div class="w-20 h-20 bg-teal-50 rounded-full flex items-center justify-center mx-auto mb-6">
          <svg class="w-10 h-10 text-[#10B981]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
          </svg>
        </div>
        <h3 class="text-xl font-bold mb-3 text-gray-800">Contribute</h3>
        <p class="text-gray-600 leading-relaxed">Donate, volunteer, or share campaigns to create real impact in communities around the world.</p>
      </div>
    </div>
  </div>
</section>

<!-- Impact Stats Section -->
<section class="py-20 bg-[#10B981] text-green-500">
  <div class="container mx-auto px-6">
    <div class="text-center mb-16">
      <h2 class="text-3xl md:text-4xl font-bold mb-4">Our Impact Together</h2>
      <p class="text-lg opacity-90 max-w-2xl mx-auto">See the difference we're making worldwide through collective action.</p>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 text-center">
      <div class="bg-white bg-opacity-10 rounded-lg p-8 backdrop-blur-sm">
        <h3 class="text-4xl font-bold mb-2">$2.5M+</h3>
        <p class="text-lg opacity-90">Funds Raised</p>
      </div>
      
      <div class="bg-white bg-opacity-10 rounded-lg p-8 backdrop-blur-sm">
        <h3 class="text-4xl font-bold mb-2">150+</h3>
        <p class="text-lg opacity-90">Active Causes</p>
      </div>
      
      <div class="bg-white bg-opacity-10 rounded-lg p-8 backdrop-blur-sm">
        <h3 class="text-4xl font-bold mb-2">10K+</h3>
        <p class="text-lg opacity-90">Volunteers</p>
      </div>
      
      <div class="bg-white bg-opacity-10 rounded-lg p-8 backdrop-blur-sm">
        <h3 class="text-4xl font-bold mb-2">32</h3>
        <p class="text-lg opacity-90">Countries Reached</p>
      </div>
    </div>
  </div>
</section>

<section id="events" class="py-20 px-6 bg-white">
  <div class="container mx-auto">
    <div class="text-center mb-16">
      <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-800">Upcoming Events</h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">Join us at these upcoming events to make an impact and connect with others.</p>
    </div>
    
    <div class="grid gap-8 grid-cols-1 md:grid-cols-3">
      @foreach($events as $event)
        <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-lg transform hover:-translate-y-1">
          <div class="h-48 overflow-hidden relative">
            <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-60"></div>
            <img src="{{ $event->image_url }}" class="w-full h-full object-cover">
          </div>
          <div class="p-6">
            <h3 class="text-xl font-bold mb-2 text-gray-800">{{ $event->title }}</h3>
            <p class="text-gray-600 mb-4">{{ $event->description }}</p>
            
            <!-- Date and Location -->
            <p class="text-sm text-gray-600 mb-2"><strong>Date:</strong> {{ \Carbon\Carbon::parse($event->startEventAt)->format('F j, Y') }}</p>
            <p class="text-sm text-gray-600 mb-4"><strong>Location:</strong> {{ $event->ville->name }}</p>

            <a href="#" class="mt-2 inline-block text-[#10B981] font-medium hover:underline">Learn more →</a>
          </div>
        </div>
      @endforeach
    
    <div class="text-center mt-12">
      <a href="#" class="inline-block bg-[#10B981] text-green-500 px-8 py-3 rounded-lg font-semibold hover:bg-[#0EA472] transition shadow-md">
        View All Events
      </a>
    </div>
  </div>
</section>



<!-- Organizations Section -->
<section id="organizations" class="py-20 px-6 bg-gray-50">
  <div class="container mx-auto">
    <div class="text-center mb-16">
      <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-800">Partner Organizations</h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">These trusted organizations are making real impact in communities worldwide.</p>
    </div>

    @php
    $categoryIcons = [
        'Health' => ['icon' => 'heart-pulse', 'color' => 'text-red-500', 'bg' => 'bg-red-100'],
        'Education' => ['icon' => 'graduation-cap', 'color' => 'text-blue-600', 'bg' => 'bg-blue-100'],
        'Environment' => ['icon' => 'leaf', 'color' => 'text-green-600', 'bg' => 'bg-green-100'],
        'Community' => ['icon' => 'users', 'color' => 'text-purple-600', 'bg' => 'bg-purple-100'],
    ];
@endphp



<div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
      @foreach($organizations as $org)
        @php
            $categoryName = $org->category->name;
            $iconData = $categoryIcons[$categoryName] ?? ['icon' => 'building', 'color' => 'text-gray-400', 'bg' => 'bg-gray-200'];
        @endphp

        <div class="bg-white rounded-xl shadow-md p-6 flex items-center space-x-4">
          <div class="flex-shrink-0">
          <div class="w-16 h-16 rounded-full {{ $iconData['bg'] }} flex items-center justify-center">
            <i data-lucide="{{ $iconData['icon'] }}" class="w-8 h-8 {{ $iconData['color'] }}"></i>
          </div>

          </div>
          <div>
            <h3 class="text-lg font-bold text-gray-800">{{ $org->name }}</h3>
            <p class="text-gray-600">{{ $org->description }}</p>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>


@endsection
