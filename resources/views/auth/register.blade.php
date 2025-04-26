@extends('layouts.auth-layout')

@section('content')
<div class="relative w-full max-w-md bg-white p-6 rounded-xl shadow-lg border border-gray-200 overflow-hidden">
    <!-- Decorative elements similar to home page -->
    <div class="absolute inset-0 bg-gradient-to-r from-emerald-500 to-teal-600 opacity-5"></div>
    <div class="absolute inset-0 bg-[url('/images/hero-pattern.svg')] opacity-5"></div>
    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-emerald-500 to-teal-600 opacity-10 rounded-full translate-x-1/2 -translate-y-1/2"></div>
    <div class="absolute bottom-0 left-0 w-32 h-32 bg-gradient-to-br from-emerald-500 to-teal-600 opacity-10 rounded-full -translate-x-1/2 translate-y-1/2"></div>
    
    <div class="relative z-10">
        <h2 class="text-xl font-semibold text-gray-800 mb-4 text-center animate-float">Register</h2>
        
        <!-- Error Message -->
        @if (session('error'))
            <div class="bg-red-500 text-white p-3 mb-4 rounded text-center">
                {{ session('error') }}
            </div>
        @endif
        
        <!-- Success Message -->
        @if (session('success'))
            <div class="bg-green-500 text-white p-3 mb-4 rounded text-center">
                {{ session('success') }}
            </div>
        @endif
        
        <form action="{{ route('register')}}" method="POST" class="reveal-item">
            @csrf
            <div class="mb-4">
                <label for="username" class="block text-gray-700">Username</label>
                <input type="text" id="username" name="name" class="w-full px-3 py-2 border rounded-md focus:ring-2 focus:ring-emerald-500 transition-all" required>
                @error('name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" id="email" name="email" class="w-full px-3 py-2 border rounded-md focus:ring-2 focus:ring-emerald-500 transition-all" required>
                @error('email')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-4">
                <label for="role" class="block text-sm font-medium text-gray-700">I am a:</label>
                <select name="role" id="role" required class="mt-1 block w-full p-2 border rounded-md focus:ring-2 focus:ring-emerald-500 transition-all">
                    <option value="volunteer">Volunteer</option>
                    <option value="organization">Non-profit Organization</option>
                </select>
                @error('role')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="block text-gray-700">Password</label>
                <input type="password" id="password" name="password" class="w-full px-3 py-2 border rounded-md focus:ring-2 focus:ring-emerald-500 transition-all" required>
                @error('password')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-4">
                <label for="confirm_password" class="block text-gray-700">Confirm Password</label>
                <input type="password" id="confirm_password" name="password_confirmation" class="w-full px-3 py-2 border rounded-md focus:ring-2 focus:ring-emerald-500 transition-all" required>
            </div>
            
            <button type="submit" class="w-full px-4 py-2 bg-emerald-600 text-white rounded-md hover:bg-emerald-700 transition-all transform hover:scale-[1.02] focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2">Register</button>
        </form>
        
        <div class="mt-4 text-center reveal-item delay-100">
            <span class="text-sm text-gray-600">Already have an account?</span>
            <a href="{{ route('login') }}" class="text-sm text-emerald-600 hover:text-emerald-700 font-medium relative group ml-1">
                Login
                <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-emerald-600 transition-all duration-300 group-hover:w-full"></span>
            </a>
        </div>
    </div>
    
    <!-- Wave divider at bottom -->
    <div class="absolute bottom-0 left-0 right-0 h-6 overflow-hidden">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="w-full h-auto absolute bottom-0 opacity-10">
            <path fill="#10B981" fill-opacity="1" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,122.7C672,117,768,139,864,149.3C960,160,1056,160,1152,138.7C1248,117,1344,75,1392,53.3L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </div>
</div>

<style>
/* Animation classes to match home page */
.animate-float {
    animation: float 3s ease-in-out infinite;
}

@keyframes float {
    0% { transform: translateY(0px); }
    50% { transform: translateY(-5px); }
    100% { transform: translateY(0px); }
}

.reveal-item {
    opacity: 0;
    transform: translateY(10px);
    animation: reveal 0.6s ease forwards;
}

.delay-100 {
    animation-delay: 0.1s;
}

.delay-200 {
    animation-delay: 0.2s;
}

@keyframes reveal {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>
@endsection
