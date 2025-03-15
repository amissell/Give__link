@extends('layouts.app')

@section('content')
<div>
    <h2>Forgot Password</h2>

    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div>
            <label for="email">Enter your email address:</label>
            <input type="email" id="email" name="email" required>
        </div>

        @error('email')
            <div>{{ $message }}</div>
        @enderror

        <button type="submit">Send Password Reset Link</button>
    </form>

    @if (session('message'))
        <div>{{ session('message') }}</div>
    @endif
</div>
@endsection
