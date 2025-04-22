@extends('layouts.simple')

@section('content')
    <h1 class="text-2xl font-bold mb-4 text-center text-[#0077cc]">Register Organization</h1>

    <form action="{{ route('organizations.store') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label for="name" class="block mb-1">Organization Name</label>
            <input type="text" id="name" name="name" class="w-full border border-gray-300 rounded p-2" required>
        </div>

        <div>
            <label for="category_id" class="block mb-1">Category</label>
            <select id="category_id" name="category_id" class="w-full border border-gray-300 rounded p-2" required>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="description" class="block mb-1">Description</label>
            <textarea id="description" name="description" class="w-full border border-gray-300 rounded p-2" required></textarea>
        </div>

        <div>
            <label for="website" class="block mb-1">Website</label>
            <input type="url" id="website" name="website" class="w-full border border-gray-300 rounded p-2">
        </div>

        <div>
            <label for="contact_email" class="block mb-1">Contact Email</label>
            <input type="email" id="contact_email" name="contact_email" class="w-full border border-gray-300 rounded p-2" required>
        </div>

        <div>
            <label for="contact_phone" class="block mb-1">Contact Phone</label>
            <input type="text" id="contact_phone" name="contact_phone" class="w-full border border-gray-300 rounded p-2" required>
        </div>

        <button type="submit" class="bg-[#0077cc] text-white px-4 py-2 rounded hover:bg-[#005fa3]">Submit</button>
    </form>
@endsection
