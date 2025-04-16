@extends('layouts.public')

@section('content')
<div class="max-w-xl mx-auto bg-white p-6 rounded shadow">
    <h2 class="text-2xl font-semibold mb-4">Register Your Organization</h2>

    @if ($errors->any())
        <div class="bg-red-100 text-red-600 p-4 rounded mb-4">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>• {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('organizations.store') }}">
        @csrf

        <div class="mb-4">
            <label class="block font-medium">Organization Name</label>
            <input type="text" name="name" class="w-full p-2 border rounded" required>
        </div>

        <div class="mb-4">
            <label class="block font-medium">Category</label>
            <select name="category_id" class="w-full p-2 border rounded" required>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label class="block font-medium">Description</label>
            <textarea name="description" class="w-full p-2 border rounded" required></textarea>
        </div>

        <div class="mb-4">
            <label class="block font-medium">Website</label>
            <input type="url" name="website" class="w-full p-2 border rounded">
        </div>

        <div class="mb-4">
            <label class="block font-medium">Contact Email</label>
            <input type="email" name="contact_email" class="w-full p-2 border rounded" required>
        </div>

        <div class="mb-4">
            <label class="block font-medium">Contact Phone</label>
            <input type="text" name="contact_phone" class="w-full p-2 border rounded" required>
        </div>

        <button type="submit" class="bg-emerald-600 text-white px-4 py-2 rounded hover:bg-emerald-700">
            Submit
        </button>
    </form>
</div>
@endsection
