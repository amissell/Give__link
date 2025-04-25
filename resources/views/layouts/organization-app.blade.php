<!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  </head>
  <body class="bg-gray-50 font-sans">
  <div class="flex h-screen overflow-hidden">
    <!-- Main Content -->
    <div class="flex-1 overflow-auto">

    <nav class="bg-white shadow px-6 py-4 flex justify-between items-center">
      <div class="flex items-center space-x-2 mb-8"> <link href ="{{ route('organizations.dashboard') }}">
            <i class="fas fa-hand-holding-heart text-2xl"></i>
            <span class="text-2xl font-bold">GiveLink</span>
        </div>
        <div class="flex items-center space-x-4">
          <a href="{{ route('organizations.dashboard') }}" class="text-sm hover:underline">Dashboard</a>
          <a href="{{ route('events.create') }}" class="text-sm hover:underline">Create Event</a>
          <a href="{{ route('events.organizationEvents') }}" class="text-sm hover:underline">All Events</a>

          <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="text-sm text-red-500 hover:underline">Logout</button>
          </form>
        </div>
      </nav>

      <!-- Page content -->
      <div class="p-6">
        @yield('content')
      </div>
    </div>
  </div>
</body>

</html>
