<nav class="bg-[#10B981] shadow-md fixed w-full z-50 transition-all duration-300 bg-white" >
  <div class="container mx-auto px-4 py-4 flex justify-between items-center">
    <a href="{{ route('home') }}" class="text-2xl font-bold text-green-500 flex items-center space-x-2">
      <!-- Simple logo shape -->
      <div class="flex items-center space-x-2 mb-8">
            <i class="fas fa-hand-holding-heart text-2xl"></i>
            <span class="text-2xl font-bold">GiveLink</span>
        </div>
    </a>

    <!-- Mobile toggle button -->
    <button id="nav-toggle" class="md:hidden focus:outline-none text-white">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
      </svg>
    </button>

    <!-- Navbar links (desktop) -->
    <div id="nav-content" class="hidden md:flex md:items-center md:space-x-6 font-medium text-green-500">
      <!-- <a href="#causes" class="hover:text-green-100 transition-colors duration-200 relative nav-link">Causes</a> -->
      <a href="events" class="hover:text-green-100 transition-colors duration-200 relative nav-link">Events</a>
      <a href="organizations" class="hover:text-green-100 transition-colors duration-200 relative nav-link">Organizations</a>
      <a href="about" class="hover:text-green-100 transition-colors duration-200 relative nav-link">About</a>
      @auth
      @if (auth()->user()->isVolunteer())
      <a href="{{ route('Volunteers.events') }}" class="bg-white text-[#10B981] px-5 py-2 rounded-full font-semibold hover:bg-green-50 transition-colors duration-200 shadow-md">My Events</a>
      @endif
      <form method="POST" action="{{ route('logout') }}" class="inline">
        @csrf
        <button type="submit" class="hover:text-green-100 transition-colors duration-200 ml-4">Logout</button>
      </form>
      @else
      <a href="{{ route('login') }}" class="hover:text-green-100 transition-colors duration-200">Log in</a>
      <a href="{{ route('register') }}" class="bg-[#10B981] text-green-500 px-5 py-2 rounded-full font-semibold hover:bg-[#0EA472] transition-colors duration-200 shadow-md">Register</a>
      @endauth

      </div>
  </div>

  <!-- Mobile dropdown links -->
  <div id="nav-dropdown" class="md:hidden hidden bg-[#0EA472] px-4 py-4 space-y-3 text-white font-medium">
    <a href="#causes" class="block py-2 hover:text-green-100 transition-colors duration-200">Causes</a>
    <a href="#events" class="block py-2 hover:text-green-100 transition-colors duration-200">Events</a>
    <a href="#organizations" class="block py-2 hover:text-green-100 transition-colors duration-200">Organizations</a>
    <a href="#about" class="block py-2 hover:text-green-100 transition-colors duration-200">About</a>
    <div class="pt-2 border-t border-[#27C795] flex flex-col space-y-3 mt-2">
    @auth
    @if (auth()->user()->isVolunteer())
        <a href="{{ route('Volunteers.events') }}" class="block py-2 hover:text-green-100 transition-colors duration-200">My Events</a>
    @endif
    <form method="POST" action="{{ route('logout') }}" class="block">
        @csrf
        <button type="submit" class="py-2 hover:text-green-100 transition-colors duration-200 w-full text-left">Logout</button>
    </form>
@else
    <a href="{{ route('login') }}" class="block py-2 hover:text-green-100 transition-colors duration-200">Log in</a>
    <a href="{{ route('register') }}" class="bg-white text-[#10B981] px-4 py-2 rounded-lg font-semibold hover:bg-green-50 text-center transition-colors duration-200 shadow-md block">Register</a>
@endauth

    </div>
  </div>
</nav>

<script>
  // Toggle mobile menu
  document.getElementById('nav-toggle').addEventListener('click', function () {
    document.getElementById('nav-dropdown').classList.toggle('hidden');
  });
  
  // Scroll effect for navbar
  window.addEventListener('scroll', function() {
    const navbar = document.querySelector('nav');
    if (window.scrollY > 50) {
      navbar.classList.add('py-2', 'bg-[#0EA472]');
      navbar.classList.remove('py-4', 'bg-[#10B981]');
    } else {
      navbar.classList.add('py-4', 'bg-[#10B981]');
      navbar.classList.remove('py-2', 'bg-[#0EA472]');
    }
  });
  
  // Active link indicator
  document.addEventListener('DOMContentLoaded', function() {
    const navLinks = document.querySelectorAll('.nav-link');
    const sections = document.querySelectorAll('section[id]');
    
    function highlightNavigation() {
      let scrollY = window.pageYOffset;
      
      sections.forEach(section => {
        const sectionTop = section.offsetTop - 100;
        const sectionHeight = section.offsetHeight;
        const sectionId = section.getAttribute('id');
        
        if (scrollY >= sectionTop && scrollY < sectionTop + sectionHeight) {
          navLinks.forEach(link => {
            link.classList.remove('text-green-100', 'font-bold');
            if (link.getAttribute('href') === '#' + sectionId) {
              link.classList.add('text-green-100', 'font-bold');
            }
          });
        }
      });
    }
    
    window.addEventListener('scroll', highlightNavigation);
  });
</script>

<style>
  .nav-link::after {
    content: '';
    position: absolute;
    width: 0;
    height: 2px;
    bottom: -4px;
    left: 50%;
    background-color: white;
    transition: all 0.3s ease;
    transform: translateX(-50%);
  }
  
  .nav-link:hover::after {
    width: 70%;
  }
</style>