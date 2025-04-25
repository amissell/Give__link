@extends('layouts.app')

@section('content')
<div class="p-6 bg-white rounded-lg shadow-md">
    <h1 class="text-2xl font-bold mb-4 text-gray-700">Users Management</h1>

    <form method="GET" class="mb-4 flex items-center">
        <label for="role" class="mr-2 text-lg">Filter by role:</label>
        <select name="role" onchange="this.form.submit()" class="border border-gray-300 px-3 py-2 rounded-lg">
            <option value="">All</option>
            <option value="admin" {{ request('role') == 'admin'}}>Admin</option>
            <option value="organization" {{ request('role') == 'organization' }}>Organization</option>
            <option value="volunteer" {{ request('role') == 'volunteer'}}>Volunteer</option>
        </select>
    </form>

    <table class="w-full table-auto border-collapse border border-gray-300">
        <thead class="bg-gray-100">
            <tr>
                <th class="border px-4 py-2 text-left">#</th>
                <th class="border px-4 py-2 text-left">Name</th>
                <th class="border px-4 py-2 text-left">Email</th>
                <th class="border px-4 py-2 text-left">Roles</th>
                <th class="border px-4 py-2 text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($users as $user)
            <tr class="hover:bg-gray-50 transition duration-300">
                <td class="border px-4 py-2">{{ $user->id }}</td>
                <td class="border px-4 py-2">{{ $user->name }}</td>
                <td class="border px-4 py-2">{{ $user->email }}</td>
                <td class="border px-4 py-2">
                    {{ $user->roles->pluck('name')->join(', ') }}
                </td>
                <td class="border px-4 py-2 text-center">
                    <a href="{{ route('admin.users.show', $user->id) }}" class="text-blue-500 hover:underline mr-3">View</a>
                    
                    @if ($user->is_active)
                    <a href="{{ route('admin.users.toggleStatus', $user->id) }}" class="text-red-500 hover:underline">Unspan</a>
                    @else
                    <a href="{{ route('admin.users.toggleStatus', $user->id) }}" class="text-green-500 hover:underline">Span</a>
                    
                    @endif

                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center p-2">No users found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
