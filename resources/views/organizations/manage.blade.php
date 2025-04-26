@extends('layouts.app')

@section('title', 'Manage Organizations')

@section('page-title', 'Manage Organizations')

@section('content')
<div class="mb-8 reveal-item">
    <div class="flex flex-col md:flex-row md:items-center md:justify-between">
        <div>
            <h1 class="text-3xl font-bold text-gray-800">
                Manage <span class="gradient-text">Organizations</span>
            </h1>
            <p class="text-gray-600 mt-2">Review and manage organization registrations</p>
        </div>
        
        <div class="mt-4 md:mt-0">
            <a href="{{ route('organizations.create') }}" class="btn-emerald px-4 py-2 rounded-lg flex items-center shadow-md hover:shadow-lg">
                <i class="fas fa-plus mr-2"></i>
                Add Organization
            </a>
        </div>
    </div>
</div>

<div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden reveal-item delay-100">
    <div class="overflow-x-auto">
        <table class="min-w-full text-sm text-left text-gray-600">
            <thead class="bg-gray-50 text-xs uppercase text-gray-700">
                <tr>
                    <th class="px-6 py-4 font-medium">Name</th>
                    <th class="px-6 py-4 font-medium">Category</th>
                    <th class="px-6 py-4 font-medium">Status</th>
                    <th class="px-6 py-4 font-medium">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @forelse ($organizations as $organization)
                <tr class="hover:bg-gray-50 transition-colors">
                    <td class="px-6 py-4 font-medium text-gray-900">{{ $organization->name }}</td>
                    <td class="px-6 py-4">{{ $organization->category->name }}</td>
                    <td class="px-6 py-4">
                        @if ($organization->status === 'pending')
                            <div class="flex space-x-2">
                                <form action="{{ route('admin.organizations.accept', $organization->id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="bg-emerald-500 hover:bg-emerald-600 text-white text-xs font-semibold px-3 py-1 rounded transition-colors">
                                        Accept
                                    </button>
                                </form>
                                <form action="{{ route('admin.organizations.reject', $organization->id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white text-xs font-semibold px-3 py-1 rounded transition-colors">
                                        Reject
                                    </button>
                                </form>
                            </div>
                        @else
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium 
                                {{ $organization->status === 'approved' ? 'bg-emerald-100 text-emerald-700' : 'bg-gray-100 text-gray-700' }}">
                                @if($organization->status === 'approved')
                                    <i class="fas fa-check-circle mr-1"></i>
                                @endif
                                {{ ucfirst($organization->status) }}
                            </span>
                        @endif
                    </td>
                    <td class="px-6 py-4">
                        <a href="{{ route('organizations.show', $organization->id) }}"
                           class="text-emerald-600 hover:text-emerald-800 font-medium text-sm flex items-center">
                            <i class="fas fa-eye mr-1"></i> View Details
                        </a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center px-6 py-8 text-gray-500">
                        <div class="flex flex-col items-center">
                            <div class="w-16 h-16 rounded-full bg-gray-100 flex items-center justify-center mb-3">
                                <i class="fas fa-building text-gray-400 text-2xl"></i>
                            </div>
                            <p class="text-gray-500 font-medium">No organizations found</p>
                        </div>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
    <!-- Pagination if needed -->
    @if(isset($organizations) && method_exists($organizations, 'links') && $organizations->hasPages())
        <div class="px-6 py-3 border-t border-gray-200">
            {{ $organizations->links() }}
        </div>
    @endif
</div>
@endsection
