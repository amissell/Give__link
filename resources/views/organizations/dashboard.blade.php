@extends('layouts.organization-app')

@section('content')
    <div class="mb-8">
        <h1 class="text-3xl font-bold">Welcome, {{ auth()->user()->name }} </h1>
        <p class="text-gray-600 mt-1">Status: <span class="text-green-600 font-semibold">Approved </span></p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Total Events -->
        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
        <h2 class="text-lg font-semibold">Total Events Created</h2>
            <p class="text-4xl text-blue-600 font-bold mt-2"></p>
        </div>

        <!-- Total Volunteers -->
        <div class="bg-white shadow rounded-lg p-6">
            <h2 class="text-lg font-semibold text-gray-500">Total Volunteers Registered</h2>
            <p class="text-4xl font-bold text-indigo-700 mt-2"></p>
        </div>
    </div>

    <!-- Manage Events -->
    <div class="mt-10">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-semibold">Manage Events</h2>
            <a href="{{ route('events.create') }}" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-700">Create New Event</a>
        </div>
        <div class="bg-white rounded shadow">
            <table class="min-w-full table-auto">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2 text-left">Title</th>
                        <th class="px-4 py-2 text-left">Date</th>
                        <th class="px-4 py-2 text-left">Volunteers</th>
                        <th class="px-4 py-2 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody>
                        <tr class="border-b">
                            <td class="px-4 py-2"></td>
                            <td class="px-4 py-2"></td>
                            <td class="px-4 py-2"></td>
                            <td class="px-4 py-2 space-x-2">
                                <a href="" class="text-blue-600 hover:underline">Edit</a>
                                <form action="" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="text-red-600 hover:underline" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        <tr><td colspan="4" class="text-center py-4 text-gray-500">No events found.</td></tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
