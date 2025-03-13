<div class="w-64 bg-emerald-700 text-white">
  <div class="p-6">
    <div class="flex items-center space-x-2 mb-8">
      <i class="fas fa-hand-holding-heart text-2xl"></i>
      <span class="text-2xl font-bold">GiveLink</span>
    </div>
    <div class="space-y-1">
      <a href="{{ route('dashboard') }}" class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-emerald-600 transition-colors">
        <i class="fas fa-chart-pie"></i>
        <span>Dashboard</span>
      </a>
      <a href="{{ route('campaigns.index') }}" class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-emerald-600 transition-colors">
        <i class="fas fa-bullhorn"></i>
        <span>Campaigns</span>
      </a>
      <a href="{{ route('events.index') }}" class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-emerald-600 transition-colors">
        <i class="fas fa-calendar-alt"></i>
        <span>Events</span>
      </a>
      <a href=" {{route('Donors.index')}}" class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-emerald-600 transition-colors">
        <i class="fas fa-heart"></i>
        <span>Donors</span>
      </a>
      <a href="#" class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-emerald-600 transition-colors">
        <i class="fas fa-users"></i>
        <span>Volunteers</span>
      </a>
      <a href="#" class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-emerald-600 transition-colors">
        <i class="fas fa-file-alt"></i>
        <span>Reports</span>
      </a>
      <a href="#" class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-emerald-600 transition-colors">
        <i class="fas fa-cog"></i>
        <span>Settings</span>
      </a>

      @guest
      <a href="{{ route('login') }}" class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-emerald-600 transition-colors">
        <i class="fas fa-sign-in-alt"></i>
        <span>Login</span>
      </a>
      <a href="{{ route('register') }}" class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-emerald-600 transition-colors">
        <i class="fas fa-user-plus"></i>
        <span>Register</span>
      </a>
      @endguest

      @auth
      <form action="{{ route('logout') }}" method="POST" class="px-4 py-3">
        @csrf
        <button type="submit" class="flex items-center space-x-3 rounded-lg hover:bg-emerald-600 transition-colors">
          <i class="fas fa-sign-out-alt"></i>
          <span>Logout</span>
        </button>
      </form>
      @endauth

    </div>
  </div>
</div>