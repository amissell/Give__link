@extends('layouts.organization-app')

@section('content')
    <h1 class="text-2xl font-bold">{{ $event->title }}</h1>
    <p class="text-gray-600">{{ $event->description }}</p>
    <p><strong>Type:</strong> {{ $event->type }}</p>
    <p><strong>Start:</strong> {{ $event->startEventAt }}</p>
    <p><strong>End:</strong> {{ $event->endEventAt }}</p>

    @if ($event->type === 'donation')
        <h2 class="text-xl font-semibold mt-6">Make a Donation</h2>
        <form action="{{ route('donations.store') }}" method="POST" class="space-y-4">
            @csrf
            <input type="hidden" name="event_id" value="{{ $event->id }}">

            <div>
                <label>Amount</label>
                <input type="number" name="amount" required class="border rounded w-full">
            </div>

            <div>
                <label>Currency</label>
                <select name="currency" class="border rounded w-full">
                    <option value="MAD">MAD</option>
                    <option value="USD">USD</option>
                </select>
            </div>

            <div>
                <label>Donor Name (optional)</label>
                <input type="text" name="donor_name" class="border rounded w-full">
            </div>

            <div>
                <label>Email (optional)</label>
                <input type="email" name="email" class="border rounded w-full">
            </div>

            <div>
                <label>Phone (optional)</label>
                <input type="text" name="phone" class="border rounded w-full">
            </div>

            <div>
                <label>Message</label>
                <textarea name="message" class="border rounded w-full"></textarea>
            </div>

            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Donate</button>
        </form>
    @endif
@endsection
