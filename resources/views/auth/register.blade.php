    @extends('layouts.auth-layout')

    @section('content')
    <div class="w-full max-w-md bg-white p-6 rounded-xl shadow-lg border border-gray-200">
        <h2 class="text-xl font-semibold text-gray-800 mb-4 text-center">Register</h2>
        <form action="{{ route('register')}}" method="POST">
        @csrf
            <div class="mb-4">
                <label for="username" class="block text-gray-700">Username</label>
                <input type="text" id="username" name="name" class="w-full px-3 py-2 border rounded-md focus:ring-2 focus:ring-emerald-500" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" id="email" name="email" class="w-full px-3 py-2 border rounded-md focus:ring-2 focus:ring-emerald-500" required>
            </div>
            <div class="mb-4">
                <label for="role" class="block text-sm font-medium text-gray-700">I am a:</label>
                <select name="role" id="role" required class="mt-1 block w-full p-2 border rounded-md">
                    <option value="volunteer">Volunteer</option>
                    <option value="organization">Non-profit Organization</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="password" class="block text-gray-700">Password</label>
                <input type="password" id="password" name="password" class="w-full px-3 py-2 border rounded-md focus:ring-2 focus:ring-emerald-500" required>
            </div>
            <div class="mb-4">
                <label for="confirm_password" class="block text-gray-700">Confirm Password</label>
                <input type="password" id="confirm_password" name="password_confirmation" class="w-full px-3 py-2 border rounded-md focus:ring-2 focus:ring-emerald-500" required>
            </div>
            <button type="submit" class="w-full px-4 py-2 bg-emerald-600 text-white rounded-md hover:bg-emerald-700 transition">Register</button>
        </form>
    </div>
    @endsection
