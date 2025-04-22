@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-xl mb-4 font-bold">Manage Organizations</h1>

        <table class="table-auto w-full text-left border border-gray-300">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-2">Name</th>
                    <th class="px-4 py-2">Category</th>
                    <th class="px-4 py-2">Status</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($organizations as $organization)
                    <tr class="border-t">
                        <td class="px-4 py-2">{{ $organization->name }}</td>
                        <td class="px-4 py-2">{{ $organization->category->name ?? 'N/A' }}</td>
                        <td class="px-4 py-2">{{ ucfirst($organization->status) }}</td>
                        <td class="px-4 py-2 space-x-2">
                            @if ($organization->status === 'pending')
                                <form action="{{ route('admin.organizations.accept', $organization->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="bg-green-500 text-white px-2 py-1 rounded">Accept</button>
                                </form>

                                <form action="{{ route('admin.organizations.reject', $organization->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded">Reject</button>
                                </form>
                            @endif

                            <a href="{{ route('admin.organizations.show', $organization->id) }}" class="bg-blue-500 text-white px-2 py-1 rounded inline-block">
                                Details
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
