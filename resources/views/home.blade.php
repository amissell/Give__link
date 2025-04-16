@extends('layouts.public')

@section('content')

@auth
    <div class="text-right mb-6">
        <a href="{{ route('organizations.create') }}"
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
        <a href="#" class="bg-white text-[#10B981] px-8 py-4 rounded-full text-lg font-semibold hover:bg-teal-50 transition shadow-lg">
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

<!-- Featured Causes Section -->
<section id="causes" class="py-20 px-6 bg-gray-50">
  <div class="container mx-auto">
    <div class="text-center mb-16">
      <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-800">Featured Causes</h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">Support these verified causes making a real difference in communities.</p>
    </div>
    
    <div class="grid gap-8 grid-cols-1 md:grid-cols-3">
      <!-- Cause 1 -->
      <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-lg transform hover:-translate-y-1">
        <div class="h-48 overflow-hidden relative">
          <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-60"></div>
          <img src="/api/placeholder/600/400" alt="Education" class="w-full h-full object-cover">
          <div class="absolute bottom-4 left-4">
            <span class="bg-[#10B981] text-green-500 text-xs font-bold px-3 py-1 rounded-full">Education</span>
          </div>
        </div>
        <div class="p-6">
          <h3 class="text-xl font-bold mb-2 text-gray-800">Education for All</h3>
          <p class="text-gray-600 mb-4">Providing educational opportunities for children in underserved communities around the world.</p>
          
          <!-- Progress bar -->
          <div class="w-full bg-gray-200 rounded-full h-2.5 mb-2">
            <div class="bg-[#10B981] h-2.5 rounded-full" style="width: 65%"></div>
          </div>
          <div class="flex justify-between text-sm text-gray-600 mb-4">
            <span>$32,500 raised</span>
            <span>$50,000 goal</span>
          </div>
          
          <a href="#" class="mt-2 inline-block text-[#10B981] font-medium hover:underline">Learn more →</a>
        </div>
      </div>
      
      <!-- Cause 2 -->
      <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-lg transform hover:-translate-y-1">
        <div class="h-48 overflow-hidden relative">
          <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-60"></div>
          <img src="/api/placeholder/600/400" alt="Clean Water" class="w-full h-full object-cover">
          <div class="absolute bottom-4 left-4">
            <span class="bg-blue-500 text-green-500 text-xs font-bold px-3 py-1 rounded-full">Clean Water</span>
          </div>
        </div>
        <div class="p-6">
          <h3 class="text-xl font-bold mb-2 text-gray-800">Clean Water Initiative</h3>
          <p class="text-gray-600 mb-4">Building sustainable water systems in rural areas to provide clean drinking water.</p>
          
          <!-- Progress bar -->
          <div class="w-full bg-gray-200 rounded-full h-2.5 mb-2">
            <div class="bg-blue-500 h-2.5 rounded-full" style="width: 78%"></div>
          </div>
          <div class="flex justify-between text-sm text-gray-600 mb-4">
            <span>$39,000 raised</span>
            <span>$50,000 goal</span>
          </div>
          
          <a href="#" class="mt-2 inline-block text-blue-500 font-medium hover:underline">Learn more →</a>
        </div>
      </div>
      
      <!-- Cause 3 -->
      <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-lg transform hover:-translate-y-1">
        <div class="h-48 overflow-hidden relative">
          <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-60"></div>
          <img src="/api/placeholder/600/400" alt="Hunger Relief" class="w-full h-full object-cover">
          <div class="absolute bottom-4 left-4">
            <span class="bg-orange-500 text-green-500 text-xs font-bold px-3 py-1 rounded-full">Hunger Relief</span>
          </div>
        </div>
        <div class="p-6">
          <h3 class="text-xl font-bold mb-2 text-gray-800">Fighting Hunger</h3>
          <p class="text-gray-600 mb-4">Providing nutritious meals and sustainable food solutions to combat hunger.</p>
          
          <!-- Progress bar -->
          <div class="w-full bg-gray-200 rounded-full h-2.5 mb-2">
            <div class="bg-orange-500 h-2.5 rounded-full" style="width: 42%"></div>
          </div>
          <div class="flex justify-between text-sm text-gray-600 mb-4">
            <span>$21,000 raised</span>
            <span>$50,000 goal</span>
          </div>
          
          <a href="#" class="mt-2 inline-block text-orange-500 font-medium hover:underline">Learn more →</a>
        </div>
      </div>
    </div>
    
    <div class="text-center mt-12">
      <a href="#" class="inline-block bg-[#10B981] text-green-500 px-8 py-3 rounded-lg font-semibold hover:bg-[#0EA472] transition shadow-md">
        View All Causes
      </a>
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

<!-- Events Section -->
<section id="events" class="py-20 px-6 bg-white">
  <div class="container mx-auto">
    <div class="text-center mb-16">
      <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-800">Upcoming Events</h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">Join us at these upcoming events to make an impact and connect with others.</p>
    </div>
    
    <div class="grid gap-8 grid-cols-1 lg:grid-cols-2">
      <!-- Event 1 -->
      <div class="flex flex-col md:flex-row bg-white rounded-xl shadow-md overflow-hidden">
        <div class="md:w-1/3 relative">
          <img src="/api/placeholder/400/300" alt="Charity Walk" class="h-full w-full object-cover">
          <div class="absolute top-4 left-4 bg-[#10B981] text-green-500 text-sm font-bold px-4 py-2 rounded-lg">
            <span>MAY</span>
            <span class="text-xl block">15</span>
          </div>
        </div>
        <div class="md:w-2/3 p-6">
          <h3 class="text-xl font-bold mb-2 text-gray-800">Charity Walk 2025</h3>
          <div class="flex items-center mb-3 text-gray-600">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
            </svg>
            <span>Central Park, New York City</span>
          </div>
          <p class="text-gray-600 mb-4">Join us for our annual charity walk to raise funds and awareness for education in underserved communities.</p>
          <a href="#" class="inline-block text-[#10B981] font-medium hover:underline">View details →</a>
        </div>
      </div>
      
      <!-- Event 2 -->
      <div class="flex flex-col md:flex-row bg-white rounded-xl shadow-md overflow-hidden">
        <div class="md:w-1/3 relative">
          <img src="/api/placeholder/400/300" alt="Fundraising Gala" class="h-full w-full object-cover">
          <div class="absolute top-4 left-4 bg-[#10B981] text-green-500 text-sm font-bold px-4 py-2 rounded-lg">
            <span>JUN</span>
            <span class="text-xl block">22</span>
          </div>
        </div>
        <div class="md:w-2/3 p-6">
          <h3 class="text-xl font-bold mb-2 text-gray-800">Annual Fundraising Gala</h3>
          <div class="flex items-center mb-3 text-gray-600">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
            </svg>
            <span>Grand Hotel, San Francisco</span>
          </div>
          <p class="text-gray-600 mb-4">An elegant evening celebrating our achievements and raising funds for future initiatives.</p>
          <a href="#" class="inline-block text-[#10B981] font-medium hover:underline">View details →</a>
        </div>
      </div>
    </div>
    
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

    <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
      <!-- Organization cards -->
      <div class="bg-white rounded-xl shadow-md p-6 flex items-center space-x-4">
        <div class="flex-shrink-0">
          <div class="w-16 h-16 rounded-full bg-[#10B981] bg-opacity-10 flex items-center justify-center">
            <svg class="w-8 h-8 text-[#10B981]" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path>
            </svg>
          </div>
        </div>
        <div>
          <h3 class="text-lg font-bold text-gray-800">Hearts Without Borders</h3>
          <p class="text-gray-600">International humanitarian aid organization</p>
        </div>
      </div>

      <div class="bg-white rounded-xl shadow-md p-6 flex items-center space-x-4">
        <div class="flex-shrink-0">
          <div class="w-16 h-16 rounded-full bg-blue-500 bg-opacity-10 flex items-center justify-center">
            <svg class="w-8 h-8 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
              <path d="M5.5 16a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.977A4.5 4.5 0 1113.5 16h-8z"></path>
            </svg>
          </div>
        </div>
        <div>
          <h3 class="text-lg font-bold text-gray-800">Blue Sky Foundation</h3>
          <p class="text-gray-600">Environmental conservation and education</p>
        </div>
      </div>

      <div class="bg-white rounded-xl shadow-md p-6 flex items-center space-x-4">
        <div class="flex-shrink-0">
          <div class="w-16 h-16 rounded-full bg-purple-500 bg-opacity-10 flex items-center justify-center">
            <svg class="w-8 h-8 text-purple-500" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"></path>
            </svg>
          </div>
        </div>
        <div>
          <h3 class="text-lg font-bold text-gray-800">Learning Bridge</h3>
          <p class="text-gray-600">Educational opportunities for youth</p>
        </div>
      </div>

      <div class="bg-white rounded-xl shadow-md p-6 flex items-center space-x-4">
        <div class="flex-shrink-0">
          <div class="w-16 h-16 rounded-full bg-orange-500 bg-opacity-10 flex items-center justify-center">
            <svg class="w-8 h-8 text-orange-500" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.95 11H13v2a3 3 0 00-2.995 2.824l-.415.103A3.001 3.001 0 0111 17a3 3 0 11-3-3 3 3 0 013-3zm0-6h.05a3 3 0 00-3-3 3 3 0 00-3 3 3 3 0 013 3h.05z"></path>
            </svg>
          </div>
        </div>
        <div>
          <h3 class="text-lg font-bold text-gray-800">Health First</h3>
          <p class="text-gray-600">Providing healthcare services to underserved communities</p>
        </div>
      </div>
    </div>
  </div>
</section>


@endsection
