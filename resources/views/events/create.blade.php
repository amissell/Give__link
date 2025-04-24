@extends('layouts.organization-app')

@section('content')
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

<form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
    @csrf

    <div>   
        <label for="title" class="block">Title</label>
        <input type="text" name="title" id="title" class="border rounded w-full p-2" value="{{ old('title') }}" required>
    </div>

    <div>
        <label for="description" class="block">Description</label>
        <textarea name="description" id="description" class="border rounded w-full p-2" required>{{ old('description') }}</textarea>
    </div>

    <div>
        <label for="startEventAt" class="block">Start Date</label>
        <input type="datetime-local" name="startEventAt" id="startEventAt" class="border rounded w-full p-2" value="{{ old('startEventAt') }}" required>
    </div>

    <div>
        <label for="endEventAt" class="block">End Date</label>
        <input type="datetime-local" name="endEventAt" id="endEventAt" class="border rounded w-full p-2" value="{{ old('endEventAt') }}" required>
    </div>

    <div>
        <label for="capacity" class="block">Capacity</label>
        <input type="number" name="capacity" id="capacity" class="border rounded w-full p-2" value="{{ old('capacity') }}" required>
    </div>

    <div class="mb-4">
    <label for="ville_id" class="block text-sm font-medium text-gray-700">Ville</label>
    <select name="ville_id" id="ville_id" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
        <option value="">-- Select Ville --</option>
        @foreach($villes as $ville)
            <option value="{{ $ville->id }}" {{ old('ville_id') == $ville->id ? 'selected' : '' }}>
                {{ $ville->name }}
            </option>
        @endforeach
    </select>
    @error('ville_id')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>


    <div>
        <label for="image" class="block">Event Image</label>
        <input type="file" name="image" id="image" class="w-full" accept="image/*">
    </div>

    <div>
        <label for="type" class="block">Event Type</label>
        <select name="type" id="type" class="border rounded w-full p-2" required>
            <option value="volunteering" {{ old('type') == 'volunteering' ? 'selected' : '' }}>Volunteering</option>
            <option value="donation" {{ old('type') == 'donation' ? 'selected' : '' }}>Donation</option>
        </select>
    </div>

    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Create Event</button>
</form>
@endsection
