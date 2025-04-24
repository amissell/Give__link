@extends('layouts.organization-app')

<h1 class="text-xl font-bold mb-4">Create New Event</h1>

@if ($errors->any())
    <div class="text-red-500 mb-4">
        <ul>
            @foreach ($errors->all() as $error)
                <li>- {{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('events.store') }}" method="POST" class="space-y-4">
    @csrf

    <div>
        <label for="title" class="block">Title</label>
        <input type="text" name="title" id="title" class="border rounded w-full p-2" required>
    </div>

    <div>
        <label for="description" class="block">Description</label>
        <textarea name="description" id="description" class="border rounded w-full p-2" required></textarea>
    </div>

    <div>
        <label for="startEventAt" class="block">Start Date</label>
        <input type="datetime-local" name="startEventAt" id="startEventAt" class="border rounded w-full p-2" required>
    </div>

    <div>
        <label for="endEventAt" class="block">End Date</label>
        <input type="datetime-local" name="endEventAt" id="endEventAt" class="border rounded w-full p-2" required>
    </div>

    <div>
        <label for="capacity" class="block">Capacity</label>
        <input type="number" name="capacity" id="capacity" class="border rounded w-full p-2" required>
    </div>

    <div>
        <label for="type" class="block">Event Type</label>
        <select name="type" id="type" class="border rounded w-full p-2" required>
            <option value="volunteering">Volunteering</option>
            <option value="donation">Donation</option>
            <option value="awareness">Awareness</option>
        </select>
    </div>

    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Create Event</button>
</form>
