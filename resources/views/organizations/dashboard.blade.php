@extends('layouts.organization-app')


@section('content')
    <!-- Welcome Section -->
    <div class="mb-8 reveal-item">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between">
            <div>
                <h1 class="text-3xl font-bold text-gray-800">
                    Welcome, {{ auth()->user()->name }}<span class="gradient-text"></span>
                </h1>
                <div class="flex items-center mt-2">
                    <p class="text-gray-600">Status:</p>
                    <span class="ml-2 px-2 py-1 bg-emerald-100 text-emerald-700 rounded-full text-sm font-medium flex items-center">
                        <i class="fas fa-check-circle mr-1"></i>
                        Approved
                    </span>
                </div>
            </div>
            
            <div class="mt-4 md:mt-0">
                <a href="{{ route('events.create') }}" class="btn-emerald px-4 py-2 rounded-lg flex items-center shadow-md hover:shadow-lg">
                    <i class="fas fa-plus mr-2"></i>
                    Create New Event
                </a>
            </div>
        </div>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <!-- Total Events -->
        <div class="dashboard-card bg-white rounded-xl shadow-sm border border-gray-100 p-6 reveal-item delay-100">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm font-medium uppercase tracking-wider">Total Events Created</p>
                    <h2 class="text-4xl font-bold text-emerald-600 mt-2 counter-value" data-target="12">0</h2>
                </div>
                <div class="w-12 h-12 rounded-full bg-emerald-100 flex items-center justify-center">
                    <i class="fas fa-calendar-alt text-emerald-500 text-xl"></i>
                </div>
            </div>
            <div class="mt-4 flex items-center text-sm">
                <span class="text-green-500 flex items-center">
                    <i class="fas fa-arrow-up mr-1"></i>
                    16%
                </span>
                <span class="text-gray-400 ml-2">from last month</span>
            </div>
        </div>
        
        <!-- Total Volunteers -->
        <div class="dashboard-card bg-white rounded-xl shadow-sm border border-gray-100 p-6 reveal-item delay-200">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm font-medium uppercase tracking-wider">Total Volunteers</p>
                    <h2 class="text-4xl font-bold text-emerald-600 mt-2 counter-value" data-target="48">0</h2>
                </div>
                <div class="w-12 h-12 rounded-full bg-emerald-100 flex items-center justify-center">
                    <i class="fas fa-users text-emerald-500 text-xl"></i>
                </div>
            </div>
            <div class="mt-4 flex items-center text-sm">
                <span class="text-green-500 flex items-center">
                    <i class="fas fa-arrow-up mr-1"></i>
                    24%
                </span>
                <span class="text-gray-400 ml-2">from last month</span>
            </div>
        </div>
        
        <!-- Upcoming Events -->
        <div class="dashboard-card bg-white rounded-xl shadow-sm border border-gray-100 p-6 reveal-item delay-300">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm font-medium uppercase tracking-wider">Upcoming Events</p>
                    <h2 class="text-4xl font-bold text-emerald-600 mt-2 counter-value" data-target="3">0</h2>
                </div>
                <div class="w-12 h-12 rounded-full bg-emerald-100 flex items-center justify-center">
                    <i class="fas fa-clock text-emerald-500 text-xl"></i>
                </div>
            </div>
            <div class="mt-4 flex items-center text-sm">
                <span class="text-gray-400">Next event in 3 days</span>
            </div>
        </div>
    </div>

    
    </div>
    
    <!-- Recent Events -->
    <div class="mt-10 reveal-item delay-500">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-xl font-semibold text-gray-800">Manage Events</h2>
            <a href="{{ route('events.create') }}" class="btn-emerald px-4 py-2 rounded-lg flex items-center text-sm">
                <i class="fas fa-plus mr-2"></i>
                Create New Event
            </a>
        </div>
        
        <div class="bg-white rounded-xl shadow-sm overflow-hidden">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Event</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Location</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Volunteers</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                            <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <!-- If there are events -->
                        @if(isset($events) && count($events) > 0)
                            @foreach($events as $event)
                                <tr class="table-row hover:bg-gray-50">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10 rounded-full bg-emerald-100 flex items-center justify-center">
                                                <i class="fas fa-calendar text-emerald-500"></i>
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">{{ $event->title }}</div>
                                                <div class="text-sm text-gray-500 truncate max-w-xs">{{ $event->description }}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">{{ \Carbon\Carbon::parse($event->startEventAt)->format('M j, Y') }}</div>
                                        <div class="text-sm text-gray-500">{{ \Carbon\Carbon::parse($event->startEventAt)->format('g:i A') }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">{{ $event->ville->name }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <span class="px-2 py-1 text-xs font-medium bg-emerald-100 text-emerald-800 rounded-full">
                                            {{ $event->volunteers_count ?? 0 }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 py-1 text-xs font-medium bg-green-100 text-green-800 rounded-full">
                                            Active
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <div class="flex justify-end space-x-2">
                                            <a href="{{ route('events.edit', $event->id) }}" class="text-emerald-600 hover:text-emerald-900">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="{{ route('events.show', $event->id) }}" class="text-blue-600 hover:text-blue-900">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <form action="{{ route('events.destroy', $event->id) }}" method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('Are you sure you want to delete this event?')">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="6" class="px-6 py-10 text-center text-gray-500">
                                    <div class="flex flex-col items-center">
                                        <div class="w-16 h-16 rounded-full bg-gray-100 flex items-center justify-center mb-3">
                                            <i class="fas fa-calendar-times text-gray-400 text-2xl"></i>
                                        </div>
                                        <p class="text-gray-500 font-medium">No events found</p>
                                        <p class="text-gray-400 text-sm mt-1">Create your first event to get started</p>
                                        <a href="{{ route('events.create') }}" class="mt-4 btn-emerald px-4 py-2 rounded-lg text-sm">
                                            <i class="fas fa-plus mr-2"></i>
                                            Create New Event
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
            
            <!-- Pagination if needed -->
            @if(isset($events) && $events->hasPages())
                <div class="px-6 py-3 border-t border-gray-200">
                    {{ $events->links() }}
                </div>
            @endif
        </div>
    </div>
    
    <!-- Recent Activity -->
    <div class="mt-10 reveal-item delay-600">
        <h2 class="text-xl font-semibold text-gray-800 mb-6">Recent Activity</h2>
        
        <div class="bg-white rounded-xl shadow-sm p-6">
            <div class="flow-root">
                <ul role="list" class="-mb-8">
                    <li>
                        <div class="relative pb-8">
                            <span class="absolute top-5 left-5 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                            <div class="relative flex items-start space-x-3">
                                <div class="relative">
                                    <div class="h-10 w-10 rounded-full bg-emerald-100 flex items-center justify-center ring-8 ring-white">
                                        <i class="fas fa-user-plus text-emerald-500"></i>
                                    </div>
                                </div>
                                <div class="min-w-0 flex-1">
                                    <div>
                                        <div class="text-sm font-medium text-gray-900">New volunteer registered</div>
                                        <p class="mt-0.5 text-sm text-gray-500">Sarah Johnson joined your Beach Cleanup event</p>
                                    </div>
                                    <div class="mt-2 text-sm text-gray-500">
                                        <p>2 hours ago</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="relative pb-8">
                            <span class="absolute top-5 left-5 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                            <div class="relative flex items-start space-x-3">
                                <div class="relative">
                                    <div class="h-10 w-10 rounded-full bg-emerald-100 flex items-center justify-center ring-8 ring-white">
                                        <i class="fas fa-calendar-check text-emerald-500"></i>
                                    </div>
                                </div>
                                <div class="min-w-0 flex-1">
                                    <div>
                                        <div class="text-sm font-medium text-gray-900">Event completed</div>
                                        <p class="mt-0.5 text-sm text-gray-500">Community Garden Planting event was completed successfully</p>
                                    </div>
                                    <div class="mt-2 text-sm text-gray-500">
                                        <p>Yesterday at 2:30 PM</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="relative">
                            <div class="relative flex items-start space-x-3">
                                <div class="relative">
                                    <div class="h-10 w-10 rounded-full bg-emerald-100 flex items-center justify-center ring-8 ring-white">
                                        <i class="fas fa-calendar-plus text-emerald-500"></i>
                                    </div>
                                </div>
                                <div class="min-w-0 flex-1">
                                    <div>
                                        <div class="text-sm font-medium text-gray-900">New event created</div>
                                        <p class="mt-0.5 text-sm text-gray-500">You created the Food Drive event</p>
                                    </div>
                                    <div class="mt-2 text-sm text-gray-500">
                                        <p>3 days ago</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="mt-6 text-center">
                <a href="#" class="text-sm font-medium text-emerald-600 hover:text-emerald-500">View all activity <i class="fas fa-arrow-right ml-1"></i></a>
            </div>
        </div>
    </div>
@endsection 