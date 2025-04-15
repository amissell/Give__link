@extends('layouts.app')

@section('content')
    <div class="max-w-xl mx-auto mt-10 bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-6 text-center text-gray-800">Edit Category</h1>

        @if ($errors->any())
            <div class="mb-4">
                <ul class="bg-red-100 text-red-700 px-4 py-2 rounded">
                    @foreach ($errors->all() as $error)
                        <li>- {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('categories.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-semibold mb-2">Category Name</label>
                <input type="text" name="name" id="name" value="{{ $category->name }}"
                       class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-emerald-500"
                       required>
            </div>

            <div class="flex justify-between">
                <a href="{{ route('categories.index') }}"
                   class="bg-gray-300 text-gray-700 px-4 py-2 rounded hover:bg-gray-400">Cancel</a>
                <button type="submit"
                        class="bg-emerald-600 text-white px-6 py-2 rounded hover:bg-emerald-700">Update</button>
            </div>
        </form>
    </div>
@endsection
