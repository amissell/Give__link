@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto bg-white p-6 rounded-xl shadow-sm border border-gray-100">
    <h2 class="text-xl font-semibold text-gray-800 mb-4">Reset Password</h2>

    <form method="POST" action="{{ route('password.update') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">

        <div class="mb-4">
            <label for="email" class="block text-gray-700">Enter your email address:</label>
            <input type="email" id="email" name="email" class="w-full px-3 py-2 border rounded-md" required value="{{ old('email') }}">
        </div>

        <div class="mb-4">
            <label for="password" class="block text-gray-700">New Password:</label>
            <input type="password" id="password" name="password" class="w-full px-3 py-2 border rounded-md" required>
        </div>

        <div class="mb-4">
            <label for="password_confirmation" class="block text-gray-700">Confirm New Password:</label>
            <input type="password" id="password_confirmation" name="password_confirmation" class="w-full px-3 py-2 border rounded-md" required>
        </div>

        @error('email')
            <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
        @enderror
        @error('password')
            <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
        @enderror

        <button type="submit" class="w-full px-4 py-2 bg-emerald-600 text-white rounded-md hover:bg-emerald-700 mt-4">Reset Password</button>
    </form>
</div>
@endsection
