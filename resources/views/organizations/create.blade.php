@extends('layouts.simple')

@section('content')
<div class="max-w-2xl mx-auto">
    <div class="mb-8 text-center reveal-item">
        <h1 class="text-3xl font-bold text-gray-800">
            Register <span class="gradient-text">Organization</span>
        </h1>
        <p class="text-gray-600 mt-2">Complete the form below to register your organization</p>
    </div>

    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 reveal-item delay-100">
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

        <form action="{{ route('organizations.store') }}" method="POST" class="space-y-6">
            @csrf

            <div class="space-y-2">
                <label for="name" class="block text-sm font-medium text-gray-700">Organization Name</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i class="fas fa-building text-gray-400"></i>
                    </div>
                    <input type="text" id="name" name="name" class="w-full border border-gray-300 rounded-lg p-3 pl-10 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-all" value="{{ old('name') }}" required>
                </div>
                @error('name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="space-y-2">
                <label for="category_id" class="block text-sm font-medium text-gray-700">Category</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i class="fas fa-tag text-gray-400"></i>
                    </div>
                    <select id="category_id" name="category_id" class="w-full border border-gray-300 rounded-lg p-3 pl-10 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-all" required>
                        <option value="">-- Select Category --</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                @error('category_id')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="space-y-2">
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea id="description" name="description" rows="4" class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-all" required>{{ old('description') }}</textarea>
                @error('description')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="space-y-2">
                <label for="website" class="block text-sm font-medium text-gray-700">Website (Optional)</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i class="fas fa-globe text-gray-400"></i>
                    </div>
                    <input type="url" id="website" name="website" class="w-full border border-gray-300 rounded-lg p-3 pl-10 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-all" value="{{ old('website') }}">
                </div>
                @error('website')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="space-y-2">
                    <label for="contact_email" class="block text-sm font-medium text-gray-700">Contact Email</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-envelope text-gray-400"></i>
                        </div>
                        <input type="email" id="contact_email" name="contact_email" class="w-full border border-gray-300 rounded-lg p-3 pl-10 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-all" value="{{ old('contact_email') }}" required>
                    </div>
                    @error('contact_email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="space-y-2">
                    <label for="contact_phone" class="block text-sm font-medium text-gray-700">Contact Phone</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-phone text-gray-400"></i>
                        </div>
                        <input type="text" id="contact_phone" name="contact_phone" class="w-full border border-gray-300 rounded-lg p-3 pl-10 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-all" value="{{ old('contact_phone') }}" required>
                    </div>
                    @error('contact_phone')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="pt-4">
                <button type="submit" class="w-full btn-emerald px-6 py-3 rounded-lg flex items-center justify-center shadow-md hover:shadow-lg">
                    <i class="fas fa-paper-plane mr-2"></i>
                    Submit Organization
                </button>
                <p class="text-sm text-gray-500 text-center mt-4">
                    Your organization will be reviewed by our team before approval
                </p>
            </div>
        </form>
    </div>
</div>

<style>
/* Animation classes */
.reveal-item {
    opacity: 0;
    transform: translateY(10px);
    animation: reveal 0.6s ease forwards;
}

.delay-100 {
    animation-delay: 0.1s;
}

@keyframes reveal {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Gradient text */
.gradient-text {
    background: linear-gradient(90deg, #10B981, #0EA472);
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
    display: inline-block;
}

/* Button styles */
.btn-emerald {
    background-color: #10B981;
    color: white;
    transition: all 0.3s ease;
}

.btn-emerald:hover {
    background-color: #059669;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(16, 185, 129, 0.2);
}
</style>
@endsection
