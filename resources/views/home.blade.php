@extends('layouts.public')

@section('title', 'GiveLink - Connect, Donate, Volunteer')

@section('content')
    <!-- Hero Section -->
    <div class="relative bg-indigo-700 rounded-xl shadow-lg overflow-hidden mb-12">
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-gradient-to-r from-indigo-800 to-indigo-600 mix-blend-multiply"></div>
        </div>
        <div class="relative px-6 py-16 sm:px-12 sm:py-24 lg:py-32 lg:px-16">
            <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl">
                Connecting Hearts & Resources
            </h1>
            <p class="mt-6 max-w-lg text-xl text-indigo-100 sm:max-w-3xl">
                GiveLink brings together donors, volunteers, and nonprofit organizations to create meaningful change in communities around the world.
            </p>
            <div class="mt-10 max-w-sm sm:flex sm:max-w-none">
                <div class="space-y-4 sm:space-y-0 sm:mx-auto sm:inline-grid sm:grid-cols-2 sm:gap-5">
                    <a href="/register" class="flex items-center justify-center px-4 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-indigo-700 bg-white hover:bg-indigo-50 sm:px-8">
                        Get Started
                    </a>
                    <a href="#how-it-works" class="flex items-center justify-center px-4 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-indigo-500 bg-opacity-60 hover:bg-opacity-70 sm:px-8">
                        Learn More
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Services Section -->
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-8 mb-16">
        <!-- Donors -->
        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-xl font-bold text-emerald-700">For Donors</h3>
                <div class="p-3 rounded-full bg-emerald-100 text-emerald-700">
                    <i class="fas fa-hand-holding-heart"></i>
                </div>
            </div>
            <p class="text-gray-600 mb-4">Support causes you care about with secure donations and track your impact.</p>
            <a href="#donor-info" class="text-sm text-emerald-600 hover:underline">Learn How to Donate</a>
        </div>

        <!-- Volunteers -->
        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-xl font-bold text-amber-600">For Volunteers</h3>
                <div class="p-3 rounded-full bg-amber-100 text-amber-600">
                    <i class="fas fa-hands-helping"></i>
                </div>
            </div>
            <p class="text-gray-600 mb-4">Find volunteer opportunities that match your skills and availability.</p>
            <a href="#volunteer-info" class="text-sm text-amber-600 hover:underline">Discover Opportunities</a>
        </div>

        <!-- Organizations -->
        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-xl font-bold text-indigo-700">For Organizations</h3>
                <div class="p-3 rounded-full bg-indigo-100 text-indigo-700">
                    <i class="fas fa-building"></i>
                </div>
            </div>
            <p class="text-gray-600 mb-4">Connect with donors and volunteers to amplify your organization's impact.</p>
            <a href="#org-info" class="text-sm text-indigo-600 hover:underline">Register Your Organization</a>
        </div>
    </div>

    <!-- Featured Causes -->
    <div class="mb-16">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-gray-800">Featured Causes</h2>
            <a href="#all-causes" class="text-indigo-600 hover:underline">View All</a>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @php
                $causes = [
                    [
                        'category' => 'Educational Support',
                        'title' => 'Books for Rural Schools',
                        'description' => 'Help provide educational materials to underserved rural communities.',
                        'progress' => 70,
                        'color' => 'emerald'
                    ],
                    [
                        'category' => 'Community Building',
                        'title' => 'Neighborhood Gardens',
                        'description' => 'Creating green spaces in urban neighborhoods for community connection.',
                        'progress' => 45,
                        'color' => 'amber'
                    ],
                    [
                        'category' => 'Healthcare',
                        'title' => 'Medical Supplies Drive',
                        'description' => 'Providing essential medical supplies to clinics in need.',
                        'progress' => 85,
                        'color' => 'indigo'
                    ]
                ];
            @endphp

            @foreach ($causes as $cause)
                <div class="bg-white rounded-xl shadow-sm overflow-hidden border border-gray-100">
                    <div class="h-48 bg-gray-200 relative">
                        <div class="absolute bottom-0 left-0 bg-{{ $cause['color'] }}-600 text-white px-3 py-1 rounded-tr-md">
                            {{ $cause['category'] }}
                        </div>
                    </div>
                    <div class="p-5">
                        <h3 class="font-bold text-lg mb-2">{{ $cause['title'] }}</h3>
                        <p class="text-gray-600 text-sm mb-4">{{ $cause['description'] }}</p>
                        <div class="flex justify-between items-center">
                            <div class="w-full bg-gray-200 rounded-full h-2.5">
                                <div class="bg-{{ $cause['color'] }}-600 h-2.5 rounded-full" style="width: {{ $cause['progress'] }}%"></div>
                            </div>
                            <span class="text-sm text-gray-600 ml-4">{{ $cause['progress'] }}%</span>
                        </div>
                        <div class="mt-4">
                            <a href="#donate" class="inline-block px-4 py-2 bg-{{ $cause['color'] }}-600 text-white rounded-md text-sm hover:bg-{{ $cause['color'] }}-700">Donate Now</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- How It Works -->
    <div id="how-it-works" class="mb-16">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">How GiveLink Works</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @php
                $steps = [
                    ['step' => '1', 'title' => 'Connect', 'desc' => 'Create an account as a donor, volunteer, or organization and join our community.'],
                    ['step' => '2', 'title' => 'Discover', 'desc' => 'Find causes, events, and organizations aligned with your interests and values.'],
                    ['step' => '3', 'title' => 'Make an Impact', 'desc' => 'Donate, volunteer, and track your contributions to see your impact grow.']
                ];
            @endphp

            @foreach ($steps as $step)
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                    <div class="flex justify-center mb-4">
                        <div class="w-12 h-12 flex items-center justify-center rounded-full bg-indigo-100 text-indigo-700 text-xl font-bold">
                            {{ $step['step'] }}
                        </div>
                    </div>
                    <h3 class="text-center text-lg font-bold text-gray-800 mb-3">{{ $step['title'] }}</h3>
                    <p class="text-center text-gray-600">{{ $step['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Upcoming Events (Placeholder) -->
    <div class="mb-16">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-gray-800">Upcoming Events</h2>
            <a href="#events" class="text-indigo-600 hover:underline">See All Events</a>
        </div>
        <p class="text-gray-500 text-sm italic">No upcoming events at the moment. Stay tuned!</p>
    </div>
@endsection
