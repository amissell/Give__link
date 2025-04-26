@extends('layouts.app')

@section('title', 'Organization Details')

@section('page-title', 'Organization Details')

@section('content')
<div class="mb-8 reveal-item">
    <div class="flex flex-col md:flex-row md:items-center md:justify-between">
        <div>
            <h1 class="text-3xl font-bold text-gray-800">
                {{ $organization->name }}
            </h1>
            <p class="text-gray-600 mt-2">
                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium 
                    {{ $organization->status === 'approved' ? 'bg-emerald-100 text-emerald-800' : 
                      ($organization->status === 'pending' ? 'bg-yellow-100 text-yellow-800' : 'bg-red-100 text-red-800') }}">
                    <i class="fas {{ $organization->status === 'approved' ? 'fa-check-circle' : 
                                    ($organization->status === 'pending' ? 'fa-clock' : 'fa-times-circle') }} mr-1"></i>
                    {{ ucfirst($organization->status) }}
                </span>
            </p>
        </div>
        
        <div class="mt-4 md:mt-0">
            <a href="{{ route('organizations.manage') }}" class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition-all flex items-center">
                <i class="fas fa-arrow-left mr-2"></i>
                Back to Organizations
            </a>
        </div>
    </div>
</div>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <!-- Organization Info Card -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 reveal-item delay-100 md:col-span-1">
        <div class="flex flex-col items-center text-center mb-6">
            <div class="w-24 h-24 rounded-full bg-emerald-100 flex items-center justify-center mb-4">
                <i class="fas fa-building text-emerald-500 text-4xl"></i>
            </div>
            <h2 class="text-xl font-bold text-gray-800">{{ $organization->name }}</h2>
            <p class="text-gray-600">{{ $organization->category->name }}</p>
            
            <div class="mt-4">
                <span class="px-3 py-1 inline-flex items-center text-sm leading-5 font-semibold rounded-full 
                    {{ $organization->status === 'approved' ? 'bg-emerald-100 text-emerald-800' : 
                      ($organization->status === 'pending' ? 'bg-yellow-100 text-yellow-800' : 'bg-red-100 text-red-800') }}">
                    {{ ucfirst($organization->status) }}
                </span>
            </div>
        </div>
        
        @if($organization->status === 'pending')
        <div class="border-t border-gray-100 pt-4 space-y-3">
            <form action="{{ route('admin.organizations.accept', $organization->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <button type="submit" class="w-full btn-emerald px-4 py-2 rounded-lg flex items-center justify-center shadow-md hover:shadow-lg">
                    <i class="fas fa-check mr-2"></i>
                    Approve Organization
                </button>
            </form>
            
            <form action="{{ route('admin.organizations.reject', $organization->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <button type="submit" class="w-full bg-red-600 text-white px-4 py-2 rounded-lg flex items-center justify-center hover:bg-red-700 transition-colors">
                    <i class="fas fa-times mr-2"></i>
                    Reject Organization
                </button>
            </form>
        </div>
        @endif
    </div>
    
    <!-- Organization Details -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 reveal-item delay-200 md:col-span-2">
        <h3 class="text-xl font-semibold text-gray-800 mb-6">Organization Information</h3>
        
        <div class="space-y-6">
            <div class="space-y-2">
                <p class="text-sm font-medium text-gray-500">Description</p>
                <p class="text-gray-800">{{ $organization->description }}</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="space-y-2">
                    <p class="text-sm font-medium text-gray-500">Category</p>
                    <p class="text-lg font-medium text-gray-900">{{ $organization->category->name }}</p>
                </div>
                
                <div class="space-y-2">
                    <p class="text-sm font-medium text-gray-500">Website</p>
                    @if($organization->website)
                        <a href="{{ $organization->website }}" target="_blank" class="text-emerald-600 hover:text-emerald-800 flex items-center">
                            {{ $organization->website }}
                            <i class="fas fa-external-link-alt ml-1 text-xs"></i>
                        </a>
                    @else
                        <p class="text-gray-500">Not provided</p>
                    @endif
                </div>
                
                <div class="space-y-2">
                    <p class="text-sm font-medium text-gray-500">Contact Email</p>
                    <a href="mailto:{{ $organization->contact_email }}" class="text-emerald-600 hover:text-emerald-800">
                        {{ $organization->contact_email }}
                    </a>
                </div>
                
                <div class="space-y-2">
                    <p class="text-sm font-medium text-gray-500">Contact Phone</p>
                    <p class="text-lg font-medium text-gray-900">{{ $organization->contact_phone }}</p>
                </div>
            </div>
        </div>
        
        <div class="mt-8 pt-6 border-t border-gray-100">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">Actions</h3>
            
            <div class="flex flex-wrap gap-3">
                <a href="#" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors flex items-center">
                    <i class="fas fa-edit mr-2"></i>
                    Edit Organization
                </a>
                
                <form action="#" method="POST" class="inline-block"
                      onsubmit="return confirm('Are you sure you want to delete this organization? This action cannot be undone.')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-colors flex items-center">
                        <i class="fas fa-trash mr-2"></i>
                        Delete Organization
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
