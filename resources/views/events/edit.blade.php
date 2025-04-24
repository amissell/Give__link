@extends('layouts.organization-app')

@section('content')
<h1 class="text-xl font-bold mb-4">Edit Event</h1>

@if ($errors->any())
    <div class="text-red-500 mb-4">
        <ul>
            @foreach ($errors->all() as $error)
                <li>- {{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('events.update', $event->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
    @csrf
    @method('PUT')

    <div>
        <label for="title">Title</label>
        <input type="text" name="title" value="{{ old('title', $event->title) }}" required>
    </div>

    <div>
        <label for="description">Description</label>
        <textarea name="description" required>{{ old('description', $event->description) }}</textarea>
    </div>

    <div>
        <label for="capacity">Capacity</label>
        <input type="number" name="capacity" value="{{ old('capacity', $event->capacity) }}" required>
    </div>

    <div>
        <label for="startEventAt">Start Date</label>
        <input type="datetime-local" name="startEventAt" value="{{ old('startEventAt', \Carbon\Carbon::parse($event->startEventAt)->format('Y-m-d\TH:i')) }}" required>
    </div>

    <div>
        <label for="endEventAt">End Date</label>
        <input type="datetime-local" name="endEventAt" value="{{ old('endEventAt', \Carbon\Carbon::parse($event->endEventAt)->format('Y-m-d\TH:i')) }}" required>
    </div>

    <div>
        <label for="ville">Ville</label>
        <select name="ville" required>
            <option value="">-- Choisir une ville --</option>
            @foreach($villes as $ville)
                <option value="{{ $ville->name }}" {{ old('ville', $event->ville) == $ville->name ? 'selected' : '' }}>
                    {{ $ville->name }}
                </option>
            @endforeach
        </select>
    </div>

    <div>
        <label for="type">Type</label>
        <select name="type" required>
            <option value="volunteering" {{ old('type', $event->type) == 'volunteering' ? 'selected' : '' }}>Volunteering</option>
            <option value="donation" {{ old('type', $event->type) == 'donation' ? 'selected' : '' }}>Donation</option>
        </select>
    </div>

    <button type="submit">Update</button>
</form>
@endsection
