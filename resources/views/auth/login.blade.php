@extends('layouts.dashboard')

@section('content')
<div class="max-w-md mx-auto bg-white p-6 rounded-xl shadow-sm border border-gray-100">
    <h2 class="text-xl font-semibold text-gray-800 mb-4">Login</h2>
    <form action="login.php" method="POST">
        <div class="mb-4">
            <label for="email" class="block text-gray-700">Email</label>
            <input type="email" id="email" name="email" class="w-full px-3 py-2 border rounded-md" required>
        </div>
        <div class="mb-4">
            <label for="password" class="block text-gray-700">Password</label>
            <input type="password" id="password" name="password" class="w-full px-3 py-2 border rounded-md" required>
        </div>
        <button type="submit" class="w-full px-4 py-2 bg-emerald-600 text-white rounded-md hover:bg-emerald-700">Login</button>
    </form>
</div>
@endsection
