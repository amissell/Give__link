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
      <!-- Sidebar -->
      @include('partials.sidebar')

      <!-- Main Content -->
      <div class="flex-1 overflow-auto">
        <!-- Header -->
        @include('partials.header')

        <div class="p-6">
          @yield('content')
        </div>
      </div>
    </div>
    @stack('scripts')
    
  </body>

  </html>