@extends('layouts.app')

@section('title', 'User Details')

@section('page-title', 'User Details')

@section('content')
<div class="mb-8 reveal-item">
    <div class="flex flex-col md:flex-row md:items-center md:justify-between">
        <div>
            <h1 class="text-3xl font-bold text-gray-800">
                User <span class="gradient-text">Details</span>
            </h1>
            <p class="text-gray-600 mt-2">View detailed information about this user</p>
        </div>
        
        <div class="mt-4 md:mt-0">
            <a href="{{ route('admin.users.index') }}" class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition-all flex items-center">
                <i class="fas fa-arrow-left mr-2"></i>
                Back to Users
            </a>
        </div>
    </div>
</div>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <!-- User Profile Card -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 reveal-item delay-100 md:col-span-1">
        <div class="flex flex-col items-center text-center mb-6">
            <div class="w-24 h-24 rounded-full bg-emerald-100 flex items-center justify-center mb-4">
                <i class="fas fa-user text-emerald-500 text-4xl"></i>
            </div>
            <h2 class="text-xl font-bold text-gray-800">{{ $user->name }}</h2>
            <p class="text-gray-600">{{ $user->email }}</p>
            
            <div class="mt-4">
                @foreach($user->roles as $role)
                    <span class="px-3 py-1 inline-flex text-sm leading-5 font-semibold rounded-full 
                        {{ $role->name === 'admin' ? 'bg-purple-100 text-purple-800' : 
                           ($role->name === 'organization' ? 'bg-blue-100 text-blue-800' : 
                           'bg-emerald-100 text-emerald-800') }} mr-2">
                        {{ ucfirst($role->name) }}
                    </span>
                @endforeach
            </div>
            
            <div class="mt-4">
                <span class="px-3 py-1 inline-flex items-center text-sm leading-5 font-semibold rounded-full 
                    {{ $user->is_active ? 'bg-emerald-100 text-emerald-800' : 'bg-red-100 text-red-800' }}">
                    <i class="fas {{ $user->is_active ? 'fa-check-circle' : 'fa-times-circle' }} mr-1"></i>
                    {{ $user->is_active ? 'Active' : 'Inactive' }}
                </span>
            </div>
        </div>
        
        <div class="border-t border-gray-100 pt-4">
            <a href="{{ route('admin.users.toggleStatus', $user->id) }}" 
               class="w-full btn-emerald px-4 py-2 rounded-lg flex items-center justify-center shadow-md hover:shadow-lg mt-2">
                <i class="fas {{ $user->is_active ? 'fa-ban' : 'fa-check' }} mr-2"></i>
                {{ $user->is_active ? 'Deactivate User' : 'Activate User' }}
            </a>
        </div>
    </div>
    
    <!-- User Details -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 reveal-item delay-200 md:col-span-2">
        <h3 class="text-xl font-semibold text-gray-800 mb-6">Account Information</h3>
        
        <div class="space-y-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="space-y-2">
                    <p class="text-sm font-medium text-gray-500">Full Name</p>
                    <p class="text-lg font-medium text-gray-900">{{ $user->name }}</p>
                </div>
                
                <div class="space-y-2">
                    <p class="text-sm font-medium text-gray-500">Email Address</p>
                    <p class="text-lg font-medium text-gray-900">{{ $user->email }}</p>
                </div>
            </div>
            
            <div class="space-y-2">
                <p class="text-sm font-medium text-gray-500">Roles</p>
                <p class="text-lg font-medium text-gray-900">{{ $user->roles->pluck('name')->join(', ') }}</p>
            </div>
            
            <div class="space-y-2">
                <p class="text-sm font-medium text-gray-500">Account Status</p>
                <p class="text-lg font-medium {{ $user->is_active ? 'text-emerald-600' : 'text-red-600' }}">
                    {{ $user->is_active ? 'Active' : 'Inactive' }}
                </p>
            </div>
            
            <div class="space-y-2">
                <p class="text-sm font-medium text-gray-500">Joined On</p>
                <p class="text-lg font-medium text-gray-900">{{ $user->created_at->format('F j, Y') }}</p>
            </div>
        </div>
        
        <div class="mt-8 pt-6 border-t border-gray-100">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">Actions</h3>
            
            <div class="flex flex-wrap gap-3">
                <a href="#" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors flex items-center">
                    <i class="fas fa-edit mr-2"></i>
                    Edit User
                </a>
                
                <form action="#" method="POST" class="inline-block"
                      onsubmit="return confirm('Are you sure you want to delete this user? This action cannot be undone.')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-colors flex items-center">
                        <i class="fas fa-trash mr-2"></i>
                        Delete User
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
