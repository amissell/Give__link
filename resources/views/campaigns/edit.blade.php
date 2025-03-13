@extends('layouts.app')

@section('title', 'Edit Campaign')

@section('content')
<div class="p-6">
    <h3 class="text-2xl font-semibold mb-4">Edit Campaign</h3>

    <!-- Edit Button -->
    <button id="edit-btn" class="px-4 py-2 bg-blue-100 text-blue-700 rounded-md">Edit Campaign</button>

    <!-- Edit Campaign Form -->
    <div id="edit-campaign" class="hidden mt-4 p-6 border rounded-lg shadow-lg bg-white">
        <h4 class="text-xl mb-4">Edit Campaign</h4>
        <form>
            <div class="mb-4">
                <label for="campaign-name" class="block text-sm">Campaign Name:</label>
                <input type="text" id="campaign-name" value="Save the Forests" class="w-full p-2 border rounded-md">
            </div>
            <div class="mb-4">
                <label for="goal" class="block text-sm">Goal:</label>
                <input type="number" id="goal" value="10000" class="w-full p-2 border rounded-md">
            </div>
            <button type="submit" class="px-4 py-2 bg-green-500 text-white rounded-md">Save</button>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script>
    document.getElementById('edit-btn').addEventListener('click', function() {
        document.getElementById('edit-campaign').classList.toggle('hidden');
    });
</script>
@endsection
