<nav class="bg-[#10B981] shadow-md">
  <div class="container mx-auto px-4 py-4 flex justify-between items-center text-green-700">
    <a href="{{ route('home') }}" class="text-2xl font-bold">GiveLink</a>

    <!-- Mobile toggle button -->
    <button id="nav-toggle" class="md:hidden focus:outline-none">
      <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
      </svg>
    </button>

    <!-- Navbar links (desktop) -->
    <div id="nav-content" class="hidden md:flex md:items-center md:space-x-6 font-medium">
      <a href="{{ route('causes') }}" class="hover:text-green-500">Causes</a>
      <a href="{{ route('events') }}" class="hover:text-green-500">Events</a>
      <a href="{{ route('organisations') }}" class="hover:text-green-500">Organizations</a>
      <a href="{{ route('about') }}" class="hover:text-green-500">About</a>
      <a href="{{ route('login') }}" class="hover:text-green-500">Log in</a>
      <a href="{{ route('register') }}" class="bg-white text-[#10B981] px-3 py-2 rounded font-semibold hover:bg-green-100 hover:text-green-700 transition duration-200">Register</a>
    </div>
  </div>

  <!-- Mobile dropdown links -->
  <div id="nav-dropdown" class="md:hidden hidden bg-[#10B981] px-4 pb-4 space-y-2 text-white font-medium">
    <a href="{{ route('causes') }}" class="block hover:text-green-100">Causes</a>
    <a href="{{ route('events') }}" class="block hover:text-green-100">Events</a>
    <a href="{{ route('organisations') }}" class="block hover:text-green-100">Organizations</a>
    <a href="{{ route('about') }}" class="block hover:text-green-100">About</a>
    <a href="{{ route('login') }}" class="block hover:text-green-100">Log in</a>
    <a href="{{ route('register') }}" class="block bg-white text-[#10B981] px-3 py-2 rounded font-semibold hover:bg-green-100 hover:text-green-700 transition duration-200">Register</a>
  </div>
</nav>

<script>
  document.getElementById('nav-toggle').addEventListener('click', function () {
    document.getElementById('nav-dropdown').classList.toggle('hidden');
  });
</script>
