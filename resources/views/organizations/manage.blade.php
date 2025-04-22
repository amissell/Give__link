@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <h1 class="text-2xl font-bold text-gray-800 mb-6">Manage Organizations</h1>

    <div class="overflow-x-auto bg-white shadow-md rounded-lg">
        <table class="min-w-full text-sm text-left text-gray-600">
            <thead class="bg-gray-100 text-xs uppercase text-gray-700">
                <tr>
                    <th class="px-6 py-4">Name</th>
                    <th class="px-6 py-4">Category</th>
                    <th class="px-6 py-4">Status</th>
                    <th class="px-6 py-4">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($organizations as $organization)
                <tr class="border-t hover:bg-gray-50">
                    <td class="px-6 py-4 font-medium text-gray-900">{{ $organization->name }}</td>
                    <td class="px-6 py-4">{{ $organization->category->name }}</td>
                    <td class="px-6 py-4">
                        @if ($organization->status === 'pending')
                            <div class="flex space-x-2">
                                <form action="{{ route('admin.organizations.accept', $organization->id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="bg-green-500 hover:bg-green-600 text-white text-xs font-semibold px-3 py-1 rounded">
                                        Accept
                                    </button>
                                </form>
                                <form action="{{ route('admin.organizations.reject', $organization->id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white text-xs font-semibold px-3 py-1 rounded">
                                        Reject
                                    </button>
                                </form>
                            </div>
                        @else
                            <span class="inline-block px-3 py-1 rounded-full text-xs font-semibold 
                                {{ $organization->status === 'approved' ? 'bg-green-100 text-green-700' : 'bg-gray-100 text-gray-700' }}">
                                {{ ucfirst($organization->status) }}
                            </span>
                        @endif
                    </td>
                    <td class="px-6 py-4">
                        <a href="{{ route('organizations.show', $organization->id) }}"
                           class="text-indigo-600 hover:text-indigo-800 font-medium text-sm">
                            View Details
                        </a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center px-6 py-8 text-gray-500">
                        No organizations found.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
