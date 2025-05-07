@extends('layouts.app')

@section('title', 'My Profile')
@section('page-title', 'My Profile')

@section('content')
<div class="min-h-screen bg-gray-100 py-10 px-6">
    <div class="max-w-3xl mx-auto bg-white p-8 rounded-xl shadow-md">
        <h2 class="text-2xl font-bold text-gray-800 mb-6 border-b pb-4">Profile Information</h2>

        <div class="space-y-4 text-gray-700">
            <div>
                <label class="font-semibold">Name:</label>
                <p class="ml-2 mt-1 text-gray-900">{{ Auth::user()->name }}</p>
            </div>
            <div>
                <label class="font-semibold">Email:</label>
                <p class="ml-2 mt-1 text-gray-900">{{ Auth::user()->email }}</p>
            </div>
            <!-- You can add more fields here if you want -->
        </div>

        <div class="mt-8">
            <a href="{{ route('dashboard') }}" class="inline-block bg-emerald-600 text-white px-6 py-2 rounded-lg hover:bg-emerald-700 transition-colors">
                ← Back to Dashboard
            </a>
        </div>
    </div>
</div>
@endsection
