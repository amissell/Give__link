@extends('layouts.app')

@section('content')
<div class="p-6 bg-white shadow-md rounded-lg">
    <h1 class="text-2xl font-bold mb-6 text-center text-gray-800">Manage Categories</h1>

    <!-- Success Message -->
    @if(session('success'))
        <div class="bg-green-500 text-white p-2 rounded mb-4">{{ session('success') }}</div>
    @endif

    <!-- Add Category Button -->
    <a href="" class="bg-emerald-600 text-white px-4 py-2 rounded-md hover:bg-emerald-700 mb-4 inline-block">
        Add New Category
    </a>

    <!-- Categories Table -->
    <table class="w-full border-collapse border border-gray-300">
        <thead>
            <tr class="bg-gray-200">
                <th class="border px-4 py-2">#</th>
                <th class="border px-4 py-2">Name</th>
                <th class="border px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td class="border px-4 py-2"></td>
                    <td class="border px-4 py-2"></td>
                    <td class="border px-4 py-2">
                        <a href="" class="text-blue-600">Edit</a>
                        <form action="" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 ml-2" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
        </tbody>
    </table>
</div>
@endsection
