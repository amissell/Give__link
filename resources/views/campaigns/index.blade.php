@extends('layouts.app')

@section('title', 'GiveLink')

@section('page-title', 'Manage and oversee campaigns')

@section('content')

<div class="p-6">
  <div class="mb-6">
    <h2 class="text-xl font-semibold text-gray-800 mb-4">Active Campaigns</h2>
    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
      <div class="flex items-center justify-between mb-4">
        <div class="flex items-center space-x-4">
          <div class="h-12 w-12 rounded-lg bg-emerald-100 flex items-center justify-center">
            <i class="fas fa-tree text-emerald-700"></i>
          </div>
          <div>
            <h3 class="font-semibold">Save the Forests</h3>
            <p class="text-sm text-gray-500">Environmental Campaign</p>
          </div>
        </div>
        <div class="flex space-x-2">
          <button class="edit-btn px-4 py-2 bg-emerald-100 text-emerald-700 rounded-md text-sm hover:bg-emerald-200 transition-colors">
            Edit
          </button>


          <button onclick="alert('Campaign deleted successfully!')" class="px-4 py-2 bg-red-100 text-red-700 rounded-md text-sm hover:bg-red-200 transition-colors">
            Delete
          </button>

          <button onclick="alert('Campaign approved successfully!')" class="px-4 py-2 bg-blue-100 text-blue-700 rounded-md text-sm hover:bg-blue-200 transition-colors">
            Approve
          </button>
        </div>
      </div>
      <div class="w-full bg-gray-200 rounded-full h-2 mb-2">
        <div class="bg-emerald-500 h-2 rounded-full" style="width: 60%"></div>
      </div>
      <div class="flex justify-between text-sm text-gray-600 mb-4">
        <p>Goal: $10,000</p>
        <p>Raised: $6,000</p>
      </div>
    </div>
  </div>

  <div class="mb-6">
    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
      <div class="flex items-center justify-between mb-4">
        <div class="flex items-center space-x-4">
          <div class="h-12 w-12 rounded-lg bg-amber-100 flex items-center justify-center">
            <i class="fas fa-utensils text-amber-700"></i>
          </div>
          <div>
            <h3 class="font-semibold">Feed the Homeless</h3>
            <p class="text-sm text-gray-500">Community Support</p>
          </div>
        </div>
        <div class="flex space-x-2">
          <button class="edit-btn px-4 py-2 bg-emerald-100 text-emerald-700 rounded-md text-sm hover:bg-emerald-200 transition-colors">
            Edit
          </button>

          <button onclick="alert('Campaign deleted successfully!')" class="px-4 py-2 bg-red-100 text-red-700 rounded-md text-sm hover:bg-red-200 transition-colors">
            Delete
          </button>

          <button onclick="alert('Campaign approved successfully!')" class="px-4 py-2 bg-blue-100 text-blue-700 rounded-md text-sm hover:bg-blue-200 transition-colors">
            Approve
          </button>
        </div>
      </div>
      <div class="w-full bg-gray-200 rounded-full h-2 mb-2">
        <div class="bg-amber-500 h-2 rounded-full" style="width: 40%"></div>
      </div>
      <div class="flex justify-between text-sm text-gray-600 mb-4">
        <p>Goal: $5,000</p>
        <p>Raised: $2,000</p>
      </div>
    </div>
  </div>
</div>


<!-- Edit Campaign Form - Initially Hidden -->
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


@endsection

@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll('.edit-btn').forEach(button => {
            button.addEventListener('click', function () {
                document.getElementById('edit-campaign').classList.toggle('hidden');
            });
        });
    });
</script>
@endpush
