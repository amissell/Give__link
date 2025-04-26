@extends('layouts.app')

@section('title', 'Manage Users')

@section('page-title', 'Manage Users')

@section('content')
<div class="mb-8 reveal-item">
    <div class="flex flex-col md:flex-row md:items-center md:justify-between">
        <div>
            <h1 class="text-3xl font-bold text-gray-800">
                Users <span class="gradient-text">Management</span>
            </h1>
            <p class="text-gray-600 mt-2">Manage user accounts and permissions</p>
        </div>
    </div>
</div>

<div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 reveal-item delay-100">
    <form method="GET" class="mb-6 flex flex-wrap items-center gap-4">
        <div class="flex items-center">
            <label for="role" class="text-sm font-medium text-gray-700 mr-2">Filter by role:</label>
            <select name="role" onchange="this.form.submit()" class="border border-gray-300 px-3 py-2 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-all">
                <option value="">All Roles</option>
                <option value="admin" {{ request('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                <option value="organization" {{ request('role') == 'organization' ? 'selected' : '' }}>Organization</option>
                <option value="volunteer" {{ request('role') == 'volunteer' ? 'selected' : '' }}>Volunteer</option>
            </select>
        </div>
        
        <div class="ml-auto">
            <button type="submit" class="btn-emerald px-4 py-2 rounded-lg flex items-center shadow-sm hover:shadow-md">
                <i class="fas fa-filter mr-2"></i>
                Apply Filters
            </button>
        </div>
    </form>

    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200 rounded-lg overflow-hidden">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">#</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Roles</th>
                    <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($users as $user)
                <tr class="hover:bg-gray-50 transition-colors">
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $user->id }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 h-10 w-10 rounded-full bg-emerald-100 flex items-center justify-center">
                                <i class="fas fa-user text-emerald-500"></i>
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">{{ $user->name }}</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $user->email }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        @foreach($user->roles as $role)
                            <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full 
                                {{ $role->name === 'admin' ? 'bg-purple-100 text-purple-800' : 
                                   ($role->name === 'organization' ? 'bg-blue-100 text-blue-800' : 
                                   'bg-emerald-100 text-emerald-800') }}">
                                {{ ucfirst($role->name) }}
                            </span>
                        @endforeach
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                        <a href="{{ route('admin.users.show', $user->id) }}" class="text-emerald-600 hover:text-emerald-900 mr-3">
                            <i class="fas fa-eye"></i>
                        </a>
                        
                        @if ($user->is_active)
                        <a href="{{ route('admin.users.toggleStatus', $user->id) }}" class="text-red-600 hover:text-red-900">
                            <i class="fas fa-ban"></i>
                        </a>
                        @else
                        <a href="{{ route('admin.users.toggleStatus', $user->id) }}" class="text-emerald-600 hover:text-emerald-900">
                            <i class="fas fa-check-circle"></i>
                        </a>
                        @endif
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="px-6 py-10 text-center text-gray-500">
                        <div class="flex flex-col items-center">
                            <div class="w-16 h-16 rounded-full bg-gray-100 flex items-center justify-center mb-3">
                                <i class="fas fa-users text-gray-400 text-2xl"></i>
                            </div>
                            <p class="text-gray-500 font-medium">No users found</p>
                        </div>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
    <!-- Pagination if needed -->
    @if(isset($users) && method_exists($users, 'links') && $users->hasPages())
        <div class="mt-4">
            {{ $users->links() }}
        </div>
    @endif
</div>
@endsection
