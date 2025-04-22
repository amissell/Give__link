@extends('layouts.simple')

@section('content')
    <div class="text-center">
        <svg class="mx-auto mb-4 text-green-500 w-16 h-16" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M9 12l2 2l4 -4M12 22C6.48 22 2 17.52 2 12S6.48 2 12 2s10 4.48 10 10s-4.48 10 -10 10z"/>
        </svg>
        <h1 class="text-2xl font-bold mb-2 text-[#0077cc]">Submission Successful</h1>
        <p class="text-gray-600">Your organization request has been sent. Please wait while the admin reviews and approves your submission.</p>
    </div>
@endsection
