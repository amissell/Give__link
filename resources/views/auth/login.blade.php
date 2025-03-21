@extends('layouts.auth-layout')

@section('content')
<div class="w-full max-w-md bg-white p-6 rounded-xl shadow-lg border border-gray-200">
    <h2 class="text-xl font-semibold text-gray-800 mb-4 text-center">Login</h2>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="email" class="block text-gray-700">Email</label>
            <input type="email" id="email" name="email" class="w-full px-3 py-2 border rounded-md focus:ring-2 focus:ring-emerald-500" required>
        </div>
        <div class="mb-4">
            <label for="password" class="block text-gray-700">Password</label>
            <input type="password" id="password" name="password" class="w-full px-3 py-2 border rounded-md focus:ring-2 focus:ring-emerald-500" required>
        </div>
        <button type="submit" class="w-full px-4 py-2 bg-emerald-600 text-white rounded-md hover:bg-emerald-700 transition">Login</button>
    </form>

    <!-- Forgot Password Link -->
    <div class="mt-4 text-center">
        <a href="{{ route('password.request') }}" class="text-sm text-emerald-600 hover:text-emerald-700">Forgot your password?</a>
    </div>

    <!-- Success Message -->
    @if (session('success'))
        <div class="bg-green-500 text-white p-3 mt-4 rounded text-center">
            {{ session('success') }}
        </div>
    @endif
</div>
@endsection
