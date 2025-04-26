<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title') - GiveLink Admin</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
    
    .dashboard-card {
      transition: all 0.3s ease;
    }
    
    .dashboard-card:hover {
      transform: translateY(-5px);
    }
    
    .btn-emerald {
      background-color: #10B981;
      color: white;
      transition: all 0.3s ease;
    }
    
    .btn-emerald:hover {
      background-color: #059669;
      transform: translateY(-2px);
      box-shadow: 0 4px 12px rgba(16, 185, 129, 0.2);
    }
    
    .gradient-text {
      background: linear-gradient(90deg, #10B981, #0EA472);
      -webkit-background-clip: text;
      background-clip: text;
      -webkit-text-fill-color: transparent;
      display: inline-block;
    }
  </style>
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
