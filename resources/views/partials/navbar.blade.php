<nav class="bg-[#10B981] shadow-md fixed w-full z-50 transition-all duration-300">
  <div class="container mx-auto px-4 py-4 flex justify-between items-center">
    <a href="#hero" class="text-2xl font-bold text-green-500 flex items-center space-x-2">
      <!-- Simple logo shape -->
      <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"></path>
        <path d="M12 8v8"></path>
        <path d="M8 12h8"></path>
      </svg>
      <span>GiveLink</span>
    </a>

    <!-- Mobile toggle button -->
    <button id="nav-toggle" class="md:hidden focus:outline-none text-white">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
      </svg>
    </button>

    <!-- Navbar links (desktop) -->
    <div id="nav-content" class="hidden md:flex md:items-center md:space-x-6 font-medium text-green-500">
      <a href="#causes" class="hover:text-green-100 transition-colors duration-200 relative nav-link">Causes</a>
      <a href="#events" class="hover:text-green-100 transition-colors duration-200 relative nav-link">Events</a>
      <a href="#organizations" class="hover:text-green-100 transition-colors duration-200 relative nav-link">Organizations</a>
      <a href="#about" class="hover:text-green-100 transition-colors duration-200 relative nav-link">About</a>
      <a href="{{ route('login') }}" class="hover:text-green-100 transition-colors duration-200">Log in</a>
      <a href="{{ route('register') }}" class="bg-[#10B981] text-green-500 px-5 py-2 rounded-full font-semibold hover:bg-[#0EA472] transition-colors duration-200 shadow-md">Register</a>
      </div>
  </div>

  <!-- Mobile dropdown links -->
  <div id="nav-dropdown" class="md:hidden hidden bg-[#0EA472] px-4 py-4 space-y-3 text-white font-medium">
    <a href="#causes" class="block py-2 hover:text-green-100 transition-colors duration-200">Causes</a>
    <a href="#events" class="block py-2 hover:text-green-100 transition-colors duration-200">Events</a>
    <a href="#organizations" class="block py-2 hover:text-green-100 transition-colors duration-200">Organizations</a>
    <a href="#about" class="block py-2 hover:text-green-100 transition-colors duration-200">About</a>
    <div class="pt-2 border-t border-[#27C795] flex flex-col space-y-3 mt-2">
      <a href="{{ route('login') }}" class="block py-2 hover:text-green-100 transition-colors duration-200">Log in</a>
      <a href="{{ route('register') }}" class="bg-white text-[#10B981] px-4 py-2 rounded-lg font-semibold hover:bg-green-50 text-center transition-colors duration-200 shadow-md">Register</a>
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