@extends('layouts.public')

@section('content')

<!-- Hero Section -->
<section class="bg-gradient-to-r from-blue-600 to-indigo-700 text-white py-20 px-6 text-center">
    <h1 class="text-4xl md:text-6xl font-bold mb-4">Welcome to GiveLink</h1>
    <p class="text-lg md:text-xl max-w-2xl mx-auto">Connecting people to causes that matter. Make a difference today.</p>
    <a href="{{ route('register') }}" class="mt-6 inline-block bg-white text-blue-600 font-semibold px-6 py-3 rounded-lg hover:bg-gray-100 transition">
        Get Started
    </a>
</section>

<!-- About Section -->
<section class="py-16 px-6 bg-gray-50 text-center">
    <h2 class="text-3xl font-bold mb-6">About GiveLink</h2>
    <p class="text-gray-700 max-w-3xl mx-auto">
        GiveLink is a platform that connects volunteers, donors, and organizations to causes across the country. Join us to empower change and bring hope to communities.
    </p>
</section>

<!-- Causes Section -->
<section class="py-16 px-6 bg-white">
    <h2 class="text-3xl font-bold text-center mb-10">Our Causes</h2>
    <div class="grid gap-8 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
        <!-- Cause Card -->
        <div class="bg-gray-100 rounded-xl shadow-md p-6">
            <h3 class="text-xl font-semibold mb-2">Education for All</h3>
            <p class="text-gray-600">We aim to provide education access to underserved communities.</p>
        </div>
        <!-- Add more cards as needed -->
    </div>
</section>

@include('partials.events')
@include('partials.organisations')
@include('partials.about')

@endsection
