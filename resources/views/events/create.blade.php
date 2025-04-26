@extends('layouts.organization-app')

@section('content')
<div class="mb-8 reveal-item">
    <div class="flex flex-col md:flex-row md:items-center md:justify-between">
        <div>
            <h1 class="text-3xl font-bold text-gray-800">
                Create <span class="gradient-text">Event</span>
            </h1>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="bg-red-50 border-l-4 border-red-500 p-4 mb-6 rounded-lg reveal-item">
        <div class="flex items-start">
            <div class="flex-shrink-0">
                <i class="fas fa-exclamation-circle text-red-500"></i>
            </div>
            <div class="ml-3">
                <h3 class="text-sm font-medium text-red-800">Please fix the following errors:</h3>
                <ul class="mt-2 text-sm text-red-700 list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endif

<div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 reveal-item delay-100 max-h-[80vh] overflow-y-auto">
    <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="space-y-2">
                <label for="title" class="block text-sm font-medium text-gray-700">Event Title</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i class="fas fa-heading text-gray-400"></i>
                    </div>
                    <input type="text" name="title" id="title" class="w-full border border-gray-300 rounded-lg p-3 pl-10 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-all" value="{{ old('title') }}" required>
                </div>
                @error('title')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="space-y-2">
                <label for="type" class="block text-sm font-medium text-gray-700">Event Type</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i class="fas fa-tag text-gray-400"></i>
                    </div>
                    <select name="type" id="type" class="w-full border border-gray-300 rounded-lg p-3 pl-10 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-all" required>
                        <option value="volunteering" {{ old('type') == 'volunteering' ? 'selected' : '' }}>Volunteering</option>
                        <option value="donation" {{ old('type') == 'donation' ? 'selected' : '' }}>Donation</option>
                    </select>
                </div>
                @error('type')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="space-y-2">
            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
            <div class="relative">
                <textarea name="description" id="description" rows="4" class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-all" required>{{ old('description') }}</textarea>
            </div>
            @error('description')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="space-y-2">
                <label for="startEventAt" class="block text-sm font-medium text-gray-700">Start Date & Time</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i class="fas fa-calendar-alt text-gray-400"></i>
                    </div>
                    <input type="datetime-local" name="startEventAt" id="startEventAt" class="w-full border border-gray-300 rounded-lg p-3 pl-10 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-all" value="{{ old('startEventAt') }}" required>
                </div>
                @error('startEventAt')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="space-y-2">
                <label for="endEventAt" class="block text-sm font-medium text-gray-700">End Date & Time</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i class="fas fa-calendar-check text-gray-400"></i>
                    </div>
                    <input type="datetime-local" name="endEventAt" id="endEventAt" class="w-full border border-gray-300 rounded-lg p-3 pl-10 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-all" value="{{ old('endEventAt') }}" required>
                </div>
                @error('endEventAt')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="space-y-2">
                <label for="capacity" class="block text-sm font-medium text-gray-700">Capacity</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i class="fas fa-users text-gray-400"></i>
                    </div>
                    <input type="number" name="capacity" id="capacity" class="w-full border border-gray-300 rounded-lg p-3 pl-10 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-all" value="{{ old('capacity') }}" required>
                </div>
                @error('capacity')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="space-y-2">
                <label for="ville_id" class="block text-sm font-medium text-gray-700">Location</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i class="fas fa-map-marker-alt text-gray-400"></i>
                    </div>
                    <select name="ville_id" id="ville_id" class="w-full border border-gray-300 rounded-lg p-3 pl-10 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-all" required>
                        <option value="">-- Select Location --</option>
                        @foreach($villes as $ville)
                            <option value="{{ $ville->id }}" {{ old('ville_id') == $ville->id ? 'selected' : '' }}>
                                {{ $ville->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                @error('ville_id')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="space-y-2">
            <label for="image" class="block text-sm font-medium text-gray-700">Event Image</label>
            <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-lg hover:border-emerald-500 transition-colors">
                <div class="space-y-1 text-center">
                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <div class="flex text-sm text-gray-600">
                        <label for="image" class="relative cursor-pointer bg-white rounded-md font-medium text-emerald-600 hover:text-emerald-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-emerald-500">
                            <span>Upload a file</span>
                            <input id="image" name="image" type="file" class="sr-only" accept="image/*">
                        </label>
                        <p class="pl-1">or drag and drop</p>
                    </div>
                    <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                </div>
            </div>
            <div id="image-preview" class="mt-2 hidden">
                <div class="relative">
                    <img src="/placeholder.svg" alt="Preview" class="h-32 w-auto rounded-lg object-cover">
                    <button type="button" id="remove-image" class="absolute top-0 right-0 bg-red-500 text-white rounded-full p-1 transform translate-x-1/2 -translate-y-1/2">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            @error('image')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex justify-end pt-4 space-x-4">
            <a href="{{ route('organizations.dashboard') }}" class="px-6 py-3 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition-all flex items-center">
                <i class="fas fa-times mr-2"></i>
                Cancel
            </a>
            <button type="submit" class="btn-emerald px-6 py-3 rounded-lg flex items-center shadow-md hover:shadow-lg">
                <i class="fas fa-save mr-2"></i>
                Create Event
            </button>
        </div>
    </form>
</div>

<script>
    // Image preview functionality
    document.addEventListener('DOMContentLoaded', function() {
        const imageInput = document.getElementById('image');
        const imagePreview = document.getElementById('image-preview');
        const previewImg = imagePreview.querySelector('img');
        const removeButton = document.getElementById('remove-image');

        imageInput.addEventListener('change', function() {
            if (this.files && this.files[0]) {
                const reader = new FileReader();
                
                reader.onload = function(e) {
                    previewImg.src = e.target.result;
                    imagePreview.classList.remove('hidden');
                }
                
                reader.readAsDataURL(this.files[0]);
            }
        });

        removeButton.addEventListener('click', function() {
            imageInput.value = '';
            imagePreview.classList.add('hidden');
        });
    });
</script>
@endsection
