@extends('layouts.app')

@section('content')
    <div class="p-6 bg-white shadow-md rounded-lg">
        <h1 class="text-2xl font-bold mb-6 text-center text-gray-800">Edit User Role</h1>

        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block text-gray-700">User Name:</label>
                <input type="text" value="{{ $user->name }}" disabled class="border p-2 rounded w-full">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Select Role:</label>
                <select name="role" class="border p-2 rounded w-full">
                    <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                    <option value="organization" {{ $user->role == 'organization' ? 'selected' : '' }}>Organization</option>
                    <option value="donor" {{ $user->role == 'donor' ? 'selected' : '' }}>Donor</option>
                    <option value="volunteer" {{ $user->role == 'volunteer' ? 'selected' : '' }}>Volunteer</option>
                </select>
            </div>

            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
                Update Role
            </button>
        </form>
    </div>
@endsection
