@extends('layouts.auth-layout')

@section('content')
<div class="max-w-md mx-auto bg-white p-6 rounded-xl shadow-sm border border-gray-100">
    <h2 class="text-xl font-semibold text-gray-800 mb-6">Forgot Password</h2>

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="mb-4">
            <label for="email" class="block text-gray-700">Enter your email address:</label>
            <input type="email" id="email" name="email" class="w-full px-3 py-2 border rounded-md" required>
        </div>

        @error('email')
            <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
        @enderror

        <button type="submit" class="w-full px-4 py-2 bg-emerald-600 text-white rounded-md hover:bg-emerald-700 mt-4">Send Password Reset Link</button>
    </form>

    @if (session('message'))
        <div class="bg-green-500 text-white p-3 mt-4 rounded">
            {{ session('message') }}
        </div>
    @endif
</div>
@endsection
