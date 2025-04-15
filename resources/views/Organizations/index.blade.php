@extends('layouts.app')

@section('title', 'Manage Organizations')

@section('page-title', 'Manage Organizations and Approve/Reject Registrations')

@section('content')
<div class="p-6 bg-white shadow-md rounded-lg">

  <!-- Title Section -->
  <h1 class="text-2xl font-bold mb-6 mt-12 text-center text-gray-800">Manage Organizations</h1>

  <!-- Search and Filters for Organizations -->
  <div class="mb-6 flex items-center justify-between">
    <div class="flex space-x-4">
      <input type="text" placeholder="Search organizations..." class="px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" />
      <select class="px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
        <option value="">Filter by Status</option>
        <option value="pending">Pending</option>
        <option value="accepted">Accepted</option>
        <option value="rejected">Rejected</option>
      </select>
      <select class="px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
        <option value="">Sort by Date</option>
        <option value="recent">Recent</option>
        <option value="oldest">Oldest</option>
      </select>
    </div>
  </div>

  <!-- Organization List Table -->
  <table class="min-w-full table-auto border-collapse border border-gray-300">
    <thead>
      <tr class="bg-gray-100 text-gray-700">
        <th class="border px-4 py-3 text-left">Organization Name</th>
        <th class="border px-4 py-3 text-left">Category</th>
        <th class="border px-4 py-3 text-left">Mission</th>
        <th class="border px-4 py-3 text-left">Status</th>
        <th class="border px-4 py-3 text-left">Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($organizations as $organization)
        <tr>
          <td class="border px-4 py-4 text-gray-600">{{ $organization->name }}</td>
          <td class="border px-4 py-4 text-gray-600">{{ $organization->category}}</td>
          <td class="border px-4 py-4 text-gray-600">{{ Str::limit($organization->mission, 60) }}</td>
          <td class="border px-4 py-4">
            @if ($organization->status === 'pending')
              <span class="text-yellow-500 font-semibold">Pending</span>
            @elseif ($organization->status === 'accepted')
              <span class="text-green-500 font-semibold">Accepted</span>
            @elseif ($organization->status === 'rejected')
              <span class="text-red-500 font-semibold">Rejected</span>
            @endif
          </td>
          <td class="border px-4 py-4">
            @if ($organization->status === 'pending')
              <a href="{{ route('admin.organizations.accept', $organization->id) }}"
                 class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-300">
                Approve
              </a>
              <a href="{{ route('admin.organizations.reject', $organization->id) }}"
                 class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-300 ml-2">
                Reject
              </a>
            @else
              <span class="text-gray-500">{{ ucfirst($organization->status) }}</span>
            @endif

            <button class="bg-blue-500 text-white px-3 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300 ml-2"
                    onclick="toggleDetails('details-{{ $organization->id }}')">
              View Details
            </button>
          </td>
        </tr>

        <!-- Expandable Details -->
        <tr id="details-{{ $organization->id }}" class="bg-gray-50 hidden">
          <td colspan="5" class="border px-4 py-4 text-gray-600">
            <p><strong>Contact Email:</strong> {{ $organization->contact_email }}</p>
            <p><strong>Contact Phone:</strong> {{ $organization->contact_phone }}</p>
            <p><strong>Website:</strong> <a href="{{ $organization->website }}" class="text-blue-500" target="_blank">{{ $organization->website }}</a></p>
            <p><strong>Registration Document:</strong> 
              @if ($organization->registration_document)
                <a href="{{ asset('documents/' . $organization->registration_document) }}" class="text-blue-500" target="_blank">View Document</a>
              @else
                <span class="text-gray-400">No Document Uploaded</span>
              @endif
            </p>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>

  <!-- Pagination -->
  <div class="mt-6 flex justify-center">
    {{ $organizations->links() }}
  </div>
</div>

<!-- Toggle Script -->
<script>
  function toggleDetails(id) {
    const row = document.getElementById(id);
    if (row) {
      row.classList.toggle('hidden');
    }
  }
</script>
@endsection
