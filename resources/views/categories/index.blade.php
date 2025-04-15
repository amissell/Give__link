@extends('layouts.app')

@section('content')
    <div class="max-w-4xl mx-auto p-6 bg-white shadow-md rounded-lg mt-10">
        <h1 class="text-2xl font-bold mb-6 text-center text-gray-800">Manage Categories</h1>

        {{-- Success Message --}}
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        {{-- Add Category Form --}}
        <form action="{{ route('categories.store') }}" method="POST" class="flex items-center space-x-4 mb-6">
            @csrf
            <input type="text" name="name" placeholder="Enter Category Name"
                class="flex-grow px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-emerald-500"
                required>
            <button type="submit"
                class="bg-emerald-600 text-white px-6 py-2 rounded hover:bg-emerald-700">Add</button>
        </form>

        {{-- Categories Table --}}
        <div class="overflow-x-auto">
            <table class="min-w-full table-auto border border-gray-200 rounded-lg">
                <thead class="bg-gray-100 text-gray-700 font-semibold">
                    <tr>
                        <th class="px-4 py-2 border">#</th>
                        <th class="px-4 py-2 border">Name</th>
                        <th class="px-4 py-2 border">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @forelse ($categories as $category)
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-4 py-2 border text-center">{{ $category->id }}</td>
                            <td class="px-4 py-2 border">{{ $category->name }}</td>
                            <td class="px-4 py-2 border text-center">
                                <a href="{{ route('categories.edit', $category->id) }}"
                                   class="text-blue-600 hover:underline">Edit</a>
                                <form action="{{ route('categories.destroy', $category->id) }}" method="POST"
                                      class="inline-block ml-2"
                                      onsubmit="return confirm('Are you sure you want to delete this category?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:underline">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center py-4 text-gray-500">No categories found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
