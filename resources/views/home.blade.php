@extends('layouts.public')

@section('content')
<!-- Hero Section -->
<section id="hero" class="relative overflow-hidden">
  <!-- Background with overlay -->
  <div class="absolute inset-0 bg-gradient-to-r from-emerald-500 to-teal-600 opacity-90"></div>
  <div class="absolute inset-0 bg-[url('/images/hero-pattern.svg')] opacity-20"></div>
  
  <div class="relative container mx-auto px-6 py-32 text-center z-10">
    <div class="max-w-3xl mx-auto reveal-section">
      <h1 class="text-5xl md:text-6xl font-extrabold mb-6 leading-tight text-green-400">
        <span class="animate-float">Give.</span> <span class="animate-float delay-200">Connect.</span> <span class="text-teal-200 animate-float delay-400">Impact.</span>
      </h1>
      <p class="text-xl md:text-2xl text-green-400 mb-8 leading-relaxed reveal-item delay-300">
        Connecting passionate people with causes that matter. Make a meaningful difference in communities across the globe.
      </p>
      
      <div class="flex flex-col sm:flex-row justify-center gap-4 mt-8 reveal-item delay-500">
        <a href="{{ route('register') }}" class="btn-modern btn-modern-primary">
          Get Started
        </a>
        <a href="#how-it-works" class="btn-modern btn-modern-outline border-white text-green-400 hover:bg-white hover:bg-opacity-10">
          Learn How
        </a>
      </div>
      
      <div class="mt-12 text-green-400 text-sm reveal-item delay-500">
        <p class="mb-3 font-medium uppercase tracking-wider">Trusted by organizations worldwide</p>
        <div class="flex flex-wrap justify-center items-center gap-8 opacity-80">
          <div class="py-2 flex items-center hover:text-teal-200 transition-colors duration-300 transform hover:scale-110">
            <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path>
            </svg>
            <span>World Relief</span>
          </div>
          <div class="py-2 flex items-center hover:text-teal-200 transition-colors duration-300 transform hover:scale-110">
            <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path>
            </svg>
            <span>Care International</span>
          </div>
          <div class="py-2 flex items-center hover:text-teal-200 transition-colors duration-300 transform hover:scale-110">
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
  
  <!-- Wave divider -->
  <div class="absolute bottom-0 left-0 right-0">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="w-full h-auto">
      <path fill="#ffffff" fill-opacity="1" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,122.7C672,117,768,139,864,149.3C960,160,1056,160,1152,138.7C1248,117,1344,75,1392,53.3L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
  </div>
</section>

<!-- How It Works Section -->
<section id="how-it-works" class="section-modern">
  <div class="container mx-auto px-6">
    <div class="text-center mb-16 reveal-section">
      <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-800 heading-modern">How GiveLink Works</h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">Our platform makes it simple to find and support causes you care about.</p>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
      <!-- Step 1 -->
      <div class="text-center reveal-item delay-100">
        <div class="w-20 h-20 bg-teal-50 rounded-full flex items-center justify-center mx-auto mb-6 shadow-md hover:shadow-lg transition-all duration-300 transform hover:scale-110 hover:bg-teal-100 animate-float">
          <svg class="w-10 h-10 text-[#10B981]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
          </svg>
        </div>
        <h3 class="text-xl font-bold mb-3 text-gray-800">Discover</h3>
        <p class="text-gray-600 leading-relaxed">Browse through verified organizations and causes that align with your values and interests.</p>
      </div>
      
      <!-- Step 2 -->
      <div class="text-center reveal-item delay-300">
        <div class="w-20 h-20 bg-teal-50 rounded-full flex items-center justify-center mx-auto mb-6 shadow-md hover:shadow-lg transition-all duration-300 transform hover:scale-110 hover:bg-teal-100 animate-float delay-200">
          <svg class="w-10 h-10 text-[#10B981]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"></path>
          </svg>
        </div>
        <h3 class="text-xl font-bold mb-3 text-gray-800">Connect</h3>
        <p class="text-gray-600 leading-relaxed">Engage directly with organizations and participate in meaningful events and campaigns.</p>
      </div>
      
      <!-- Step 3 -->
      <div class="text-center reveal-item delay-500">
        <div class="w-20 h-20 bg-teal-50 rounded-full flex items-center justify-center mx-auto mb-6 shadow-md hover:shadow-lg transition-all duration-300 transform hover:scale-110 hover:bg-teal-100 animate-float delay-400">
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
<section class="py-20 bg-[#10B981] text-green-400 relative overflow-hidden">
  <div class="absolute inset-0 bg-[url('/images/pattern-dots.svg')] opacity-10"></div>
  
  <div class="container mx-auto px-6 relative z-10">
    <div class="text-center mb-16 reveal-section">
      <h2 class="text-3xl md:text-4xl font-bold mb-4">Our Impact Together</h2>
      <p class="text-lg opacity-90 max-w-2xl mx-auto">See the difference we're making worldwide through collective action.</p>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 text-center">
      <div class="glass-effect rounded-lg p-8 backdrop-blur-sm hover:bg-opacity-20 transition-all duration-300 transform hover:scale-105 hover:shadow-xl counter-card reveal-item delay-100">
        <h3 class="text-4xl font-bold mb-2 counter" data-target="2500000">$0</h3>
        <p class="text-lg opacity-90">Funds Raised</p>
      </div>
      
      <div class="glass-effect rounded-lg p-8 backdrop-blur-sm hover:bg-opacity-20 transition-all duration-300 transform hover:scale-105 hover:shadow-xl counter-card reveal-item delay-200">
        <h3 class="text-4xl font-bold mb-2 counter" data-target="150">0</h3>
        <p class="text-lg opacity-90">Active Causes</p>
      </div>
      
      <div class="glass-effect rounded-lg p-8 backdrop-blur-sm hover:bg-opacity-20 transition-all duration-300 transform hover:scale-105 hover:shadow-xl counter-card reveal-item delay-300">
        <h3 class="text-4xl font-bold mb-2 counter" data-target="10000">0</h3>
        <p class="text-lg opacity-90">Volunteers</p>
      </div>
      
      <div class="glass-effect rounded-lg p-8 backdrop-blur-sm hover:bg-opacity-20 transition-all duration-300 transform hover:scale-105 hover:shadow-xl counter-card reveal-item delay-400">
        <h3 class="text-4xl font-bold mb-2 counter" data-target="32">0</h3>
        <p class="text-lg opacity-90">Countries Reached</p>
      </div>
    </div>
  </div>
  
  <!-- Wave divider -->
  <div class="absolute bottom-0 left-0 right-0">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="w-full h-auto">
      <path fill="#ffffff" fill-opacity="1" d="M0,224L48,213.3C96,203,192,181,288,181.3C384,181,480,203,576,224C672,245,768,267,864,250.7C960,235,1056,181,1152,165.3C1248,149,1344,171,1392,181.3L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
  </div>
</section>

<section id="events" class="section-modern">
  <div class="container mx-auto">
    <div class="text-center mb-16 reveal-section">
      <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-800 heading-modern">Upcoming Events</h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">Join us at these upcoming events to make an impact and connect with others.</p>
    </div>
    
    <div class="grid gap-8 grid-cols-1 md:grid-cols-3">
      @foreach($events as $index => $event)
        <div class="modern-card reveal-item delay-{{ $index * 100 }}">
          <div class="h-48 overflow-hidden relative group">
            <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-60 group-hover:opacity-80 transition-opacity duration-300"></div>
            <div class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700 ease-in-out" style="background-image: url('{{ asset('storage/' . $event->image) }}'); background-size: cover; background-position: center;"></div>
            <div class="absolute bottom-4 left-4 bg-[#10B981] text-green-400 px-3 py-1 rounded-full text-sm font-medium">
              {{ \Carbon\Carbon::parse($event->startEventAt)->format('M j') }}
            </div>
          </div>
          <div class="p-6">
            <h3 class="text-xl font-bold mb-2 text-gray-800 hover:text-[#10B981] transition-colors duration-300">{{ $event->title }}</h3>
            <p class="text-gray-600 mb-4">{{ $event->description }}</p>
            
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
              <span>{{ $event->ville->name }}</span>
            </div>

            <a href="#" class="mt-2 inline-block text-[#10B981] font-medium hover:underline relative overflow-hidden group">
              <span class="relative z-10">Learn more</span>
              <span class="inline-block ml-1 transition-transform duration-300 transform group-hover:translate-x-1">→</span>
              <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#10B981] transition-all duration-300 group-hover:w-full"></span>
            </a>
          </div>
        </div>
      @endforeach
    </div>
    
    <div class="text-center mt-12 reveal-section">
      <a href="#" class="btn-modern btn-modern-primary">
        View All Events
      </a>
    </div>
  </div>
</section>

<!-- Organizations Section -->
<section id="organizations" class="section-modern bg-gray-50 relative">
  <!-- Background pattern -->
  <div class="absolute inset-0 bg-[url('/images/pattern-grid.svg')] opacity-5"></div>
  
  <div class="container mx-auto relative z-10">
    <div class="text-center mb-16 reveal-section">
      <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-800 heading-modern">Partner Organizations</h2>
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
      @foreach($organizations as $index => $org)
        @php
            $categoryName = $org->category->name;
            $iconData = $categoryIcons[$categoryName] ?? ['icon' => 'building', 'color' => 'text-gray-400', 'bg' => 'bg-gray-200'];
            $delay = ($index % 3) * 100;
        @endphp

        <div class="modern-card bg-white p-6 flex items-center space-x-4 reveal-item delay-{{ $delay }}">
          <div class="flex-shrink-0">
            <div class="w-16 h-16 rounded-full {{ $iconData['bg'] }} flex items-center justify-center transform transition-transform duration-500 hover:rotate-12 hover:scale-110">
              <i data-lucide="{{ $iconData['icon'] }}" class="w-8 h-8 {{ $iconData['color'] }}"></i>
            </div>
          </div>
          <div>
            <h3 class="text-lg font-bold text-gray-800 hover:text-[#10B981] transition-colors duration-300">{{ $org->name }}</h3>
            <p class="text-gray-600">{{ $org->description }}</p>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

<!-- Newsletter Section - New Addition -->
<section class="py-16 bg-gradient-to-r from-emerald-500 to-teal-600 relative overflow-hidden">
  <!-- Decorative elements -->
  <div class="absolute top-0 left-0 w-64 h-64 bg-white opacity-5 rounded-full -translate-x-1/2 -translate-y-1/2"></div>
  <div class="absolute bottom-0 right-0 w-96 h-96 bg-white opacity-5 rounded-full translate-x-1/3 translate-y-1/3"></div>
  
  <div class="container mx-auto px-6 relative z-10">
    <div class="max-w-2xl mx-auto text-center reveal-section">
      <h2 class="text-3xl md:text-4xl font-bold mb-4 text-green-400">Stay Connected</h2>
      <p class="text-lg text-green-400 opacity-90 mb-8">
        Join our newsletter to get updates on new causes, events, and ways to make an impact.
      </p>

      <div class="flex flex-col sm:flex-row gap-2 max-w-md mx-auto">
        <input
          type="email"
          placeholder="Your email address"
          class="px-4 py-3 rounded-lg flex-grow focus:outline-none focus:ring-2 focus:ring-teal-300"
        />
        <button class="btn-modern btn-modern-primary bg-white text-[#10B981] hover:bg-teal-50">
          Subscribe
        </button>
      </div>
    </div>
  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Counter animation
    const counterElements = document.querySelectorAll('.counter');
    const counterOptions = {
        threshold: 0.5
    };
    
    const counterCallback = (entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const target = parseInt(entry.target.getAttribute('data-target'));
                const duration = 2000; // ms
                const increment = target / (duration / 16); // 60fps
                let current = 0;
                
                const updateCounter = () => {
                    if (current < target) {
                        if (target >= 1000000) {
                            // Format as $X.XM for millions
                            entry.target.textContent = '$' + (current / 1000000).toFixed(1) + 'M+';
                        } else if (target >= 1000) {
                            // Format as XK+ for thousands
                            entry.target.textContent = (current / 1000).toFixed(0) + 'K+';
                        } else {
                            entry.target.textContent = Math.ceil(current) + '+';
                        }
                        current += increment;
                        requestAnimationFrame(updateCounter);
                    } else {
                        if (target >= 1000000) {
                            entry.target.textContent = '$' + (target / 1000000).toFixed(1) + 'M+';
                        } else if (target >= 1000) {
                            entry.target.textContent = (target / 1000).toFixed(0) + 'K+';
                        } else {
                            entry.target.textContent = target + '+';
                        }
                    }
                };
                
                updateCounter();
                observer.unobserve(entry.target);
            }
        });
    };
    
    if (counterElements.length > 0) {
        const counterObserver = new IntersectionObserver(counterCallback, counterOptions);
        counterElements.forEach(counter => {
            counterObserver.observe(counter);
        });
    }
});
</script>
@endsection