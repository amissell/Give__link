@extends('layouts.app')

@section('title', 'My Profile')
@section('page-title', 'My Profile')

@section('content')
<div class="bg-white overflow-hidden shadow rounded-lg border mb-6">
    <div class="px-4 py-5 sm:px-6">
        <h3 class="text-lg leading-6 font-medium text-gray-900">User Profile</h3>
        <p class="mt-1 max-w-2xl text-sm text-gray-500">Profile information based on role.</p>
    </div>
    <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
        <dl class="sm:divide-y sm:divide-gray-200">
            <div class="flex items-center space-x-4 p-4">
                <img class="w-16 h-16 rounded-full object-cover border"
                src="{{ $user->profile_photo ? asset('storage/' . $user->profile_photo) : asset('images/default-profile.png') }}"
                alt="User profile picture">
                <div>
                    <h4 class="text-lg font-semibold text-gray-900">{{ $user->name }}</h4>
                    <p class="text-sm text-gray-500">{{ $user->email }}</p>
                </div>
            </div>
            <form action="{{ route('profile.uploadPhoto') }}" method="POST" enctype="multipart/form-data" class="px-6 py-4">
                @csrf
                <label class="block text-sm font-medium text-gray-700 mb-2" for="profile_photo">
                    Upload Profile Photo:
                </label>
                <input type="file" name="profile_photo" id="profile_photo"
                class="block w-full text-sm text-gray-700 border border-gray-300 rounded-lg cursor-pointer bg-white focus:outline-none">
                <button type="submit"
                class="mt-3 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
                Upload
            </button>
        </form>
        @if (session('success'))
        <div class="mt-3 text-green-600 font-medium">
        {{ session('success') }}
    </div>
    @endif
    
    @if ($errors->any())
    <div class="mt-3 text-red-600 font-medium">
    {{ $errors->first() }}
</div>
@endif


            <x-user-profile-row label="Name" :value="$user->name" />
            <x-user-profile-row label="Email" :value="$user->email" />
            <x-user-profile-row label="Phone" :value="$user->phone ? $user->phone : 'Not provided'" />
            <x-user-profile-row label="Role" :value="$user->roles->pluck('name')->implode(', ')" />
            @if($user->isOrganization() && $user->organization)
                <x-user-profile-row label="Organization Name" :value="$user->organization->name" />
                <x-user-profile-row label="Category" :value="$user->organization->category->name ?? 'N/A'" />
                <x-user-profile-row label="Description" :value="$user->organization->description" />
                <x-user-profile-row label="Website" :value="$user->organization->website" />
                <x-user-profile-row label="Contact Email" :value="$user->organization->contact_email" />
                <x-user-profile-row label="Contact Phone" :value="$user->organization->contact_phone" />
                <x-user-profile-row label="Status" :value="ucfirst($user->organization->status)" />
            @endif

            @if($user->isVolunteer() && $user->events->count())
                <div class="px-6 py-4">
                    <h4 class="text-md font-semibold text-gray-700 mb-2">Volunteer Events</h4>
                    <ul class="list-disc list-inside text-sm text-gray-800">
                        @foreach($user->events as $event)
                            <li>{{ $event->name }} @if($event->pivot?->status) ({{ $event->pivot->status }}) @endif</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </dl>
    </div>
</div>

@endsection
