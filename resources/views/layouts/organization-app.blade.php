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
      <!-- Header -->
      <nav class="bg-white shadow px-6 py-4 flex justify-between items-center">
        <a href="#" class="text-xl font-bold text-green-500">GiveLink/a>
        <div class="flex items-center space-x-4">
          <a href="#" class="text-sm hover:underline">Dashboard</a>
          <a href="#" class="text-sm hover:underline">Create Event</a>
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
