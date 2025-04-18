@extends('layouts.app')

@section('content')
<div class="p-6 bg-white rounded-lg shadow-md">
    <h1 class="text-2xl font-bold mb-4 text-gray-700">User Details</h1>

    <div class="mb-6">
        <strong class="text-lg">Name:</strong> {{ $user->name }}
    </div>

    <div class="mb-6">
        <strong class="text-lg">Email:</strong> {{ $user->email }}
    </div>

    <div class="mb-6">
        <strong class="text-lg">Roles:</strong> {{ $user->roles->pluck('name')->join(', ') }}
    </div>

    <div class="mb-6">
        <strong class="text-lg">Status:</strong> 
        <span class="font-semibold text-green-600">{{ $user->is_active ? 'Active' : 'Inactive' }}</span>
    </div>

    <a href="{{ route('admin.users.index') }}" class="text-blue-500 hover:underline">Back to User Management</a>
</div>
@endsection

