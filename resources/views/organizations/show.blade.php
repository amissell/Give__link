@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <h1 class="text-3xl font-semibold text-gray-800 mb-6">{{ $organization->name }} Details</h1>

    <div class="bg-white shadow-lg rounded-lg p-6">
        <div class="space-y-4">
            <div class="flex justify-between items-center">
                <span class="text-lg font-medium text-gray-700">Category</span>
                <span class="text-gray-600">{{ $organization->category->name }}</span>
            </div>
            <div class="flex justify-between items-center">
                <span class="text-lg font-medium text-gray-700">Description</span>
                <p class="text-gray-600">{{ $organization->description }}</p>
            </div>
            <div class="flex justify-between items-center">
                <span class="text-lg font-medium text-gray-700">Website</span>
                <a href="{{ $organization->website }}" target="_blank" class="text-indigo-600 hover:text-indigo-800">
                    {{ $organization->website }}
                </a>
            </div>
            <div class="flex justify-between items-center">
                <span class="text-lg font-medium text-gray-700">Contact Email</span>
                <span class="text-gray-600">{{ $organization->contact_email }}</span>
            </div>
            <div class="flex justify-between items-center">
                <span class="text-lg font-medium text-gray-700">Contact Phone</span>
                <span class="text-gray-600">{{ $organization->contact_phone }}</span>
            </div>
            <div class="flex justify-between items-center">
                <span class="text-lg font-medium text-gray-700">Status</span>
                <span class="inline-block px-3 py-1 rounded-full text-xs font-semibold
                    {{ $organization->status === 'approved' ? 'bg-green-100 text-green-700' : 'bg-gray-100 text-gray-700' }}">
                    {{ ucfirst($organization->status) }}
                </span>
            </div>
        </div>
    </div>

    <div class="mt-6">
        <a href="{{ route('organizations.manage') }}" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">
            Back
        </a>
    </div>
</div>
@endsection
