@extends('layouts.organization-app')

@section('content')
<div class="mb-8 reveal-item">
    <div class="flex flex-col md:flex-row md:items-center md:justify-between">
        <div>
            <h1 class="text-3xl font-bold text-gray-800">
                Event <span class="gradient-text">Details</span>
            </h1>
            <p class="text-gray-600 mt-2">View and manage your event information</p>
        </div>
        
        <div class="mt-4 md:mt-0">
            <a href="{{ route('organizations.dashboard') }}" class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition-all flex items-center">
                <i class="fas fa-arrow-left mr-2"></i>
                Back to Dashboard
            </a>
        </div>
    </div>
</div>

<div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden reveal-item delay-100">
    <!-- Event Image Banner -->
    <div class="w-full h-64 md:h-80 bg-center bg-cover relative" style="background-image: url('{{ asset('storage/' . $event->image) }}');">
        <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-60"></div>
        
        <!-- Event Type Badge -->
        <div class="absolute bottom-4 left-4">
            <span class="px-3 py-1 bg-emerald-500 text-white text-sm font-medium rounded-full">
                {{ $event->type ?? 'Volunteering' }}
            </span>
        </div>
        
        <!-- Event Date Badge -->
        <div class="absolute top-4 right-4">
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="bg-emerald-600 text-white text-center py-1 px-3 text-sm font-bold">
                    {{ \Carbon\Carbon::parse($event->startEventAt)->format('M') }}
                </div>
                <div class="text-center py-2 px-3">
                    <div class="text-2xl font-bold text-gray-800">{{ \Carbon\Carbon::parse($event->startEventAt)->format('d') }}</div>
                    <div class="text-xs text-gray-600">{{ \Carbon\Carbon::parse($event->startEventAt)->format('h:i A') }}</div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="p-6">
        <div class="flex flex-col md:flex-row md:items-start md:gap-8">
            <!-- Event Details -->
            <div class="flex-1">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">{{ $event->title }}</h2>
                
                <div class="flex flex-wrap gap-4 mb-6 text-sm text-gray-600">
                    <div class="flex items-center">
                        <i class="fas fa-calendar-alt text-emerald-500 mr-2"></i>
                        <span>{{ \Carbon\Carbon::parse($event->startEventAt)->format('F j, Y') }}</span>
                    </div>
                    
                    <div class="flex items-center">
                        <i class="fas fa-clock text-emerald-500 mr-2"></i>
                        <span>{{ \Carbon\Carbon::parse($event->startEventAt)->format('g:i A') }} - {{ \Carbon\Carbon::parse($event->endEventAt)->format('g:i A') }}</span>
                    </div>
                    
                    <div class="flex items-center">
                        <i class="fas fa-map-marker-alt text-emerald-500 mr-2"></i>
                        <span>{{ $event->ville ? $event->ville->name : 'Not specified' }}</span>
                    </div>
                    
                    <div class="flex items-center">
                        <i class="fas fa-users text-emerald-500 mr-2"></i>
                        <span>{{ $event->capacity ?? 'Unlimited' }} capacity</span>
                    </div>
                </div>
                
                <div class="mb-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Description</h3>
                    <div class="text-gray-700 leading-relaxed">
                        {{ $event->description }}
                    </div>
                </div>
            </div>
            
            <!-- Event Stats Card -->
            <div class="w-full md:w-64 bg-gray-50 rounded-lg p-4 mt-6 md:mt-0">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Event Statistics</h3>
                
                <div class="space-y-4">
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600">Volunteers:</span>
                        <span class="font-semibold text-emerald-600">{{ $event->volunteers_count ?? 0 }}</span>
                    </div>
                    
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600">Status:</span>
                        <span class="px-2 py-1 bg-emerald-100 text-emerald-800 rounded-full text-xs font-medium">Active</span>
                    </div>
                    
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600">Created:</span>
                        <span class="text-gray-800">{{ $event->created_at->diffForHumans() }}</span>
                    </div>
                    
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600">Time left:</span>
                        <span class="text-gray-800">
                            @if(\Carbon\Carbon::parse($event->startEventAt)->isPast())
                                In progress
                            @else
                                {{ \Carbon\Carbon::now()->diffForHumans(\Carbon\Carbon::parse($event->startEventAt), true) }}
                            @endif
                        </span>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Action Buttons -->
        <div class="mt-8 pt-6 border-t border-gray-100 flex flex-wrap gap-4">
            <a href="{{ route('events.edit', $event->id) }}" class="btn-emerald px-4 py-2 rounded-lg flex items-center shadow-md hover:shadow-lg">
                <i class="fas fa-edit mr-2"></i>
                Edit Event
            </a>
            
            <form action="{{ route('events.destroy', $event->id) }}" method="POST" class="inline"
                  onsubmit="return confirm('Are you sure you want to delete this event? This action cannot be undone.')">
                @csrf
                @method('DELETE')
                <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-colors flex items-center">
                    <i class="fas fa-trash mr-2"></i>
                    Delete Event
                </button>
            </form>
            
            <a href="{{ route('events.organizationEvents') }}" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors flex items-center">
                <i class="fas fa-list mr-2"></i>
                All Events
            </a>
        </div>
    </div>
</div>

<!-- Volunteers Section (if applicable) -->
<div class="mt-8 reveal-item delay-200">
    <h2 class="text-xl font-semibold text-gray-800 mb-6">Registered Volunteers</h2>
    
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Volunteer</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Registered On</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @if(isset($event->volunteers) && count($event->volunteers) > 0)
                        @foreach($event->volunteers as $volunteer)
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10 rounded-full bg-emerald-100 flex items-center justify-center">
                                            <i class="fas fa-user text-emerald-500"></i>
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">{{ $volunteer->name }}</div>
                                            <div class="text-sm text-gray-500">{{ $volunteer->email }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $volunteer->pivot->created_at->format('M j, Y') }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 py-1 text-xs font-medium bg-emerald-100 text-emerald-800 rounded-full">
                                        Confirmed
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="#" class="text-emerald-600 hover:text-emerald-900">
                                        <i class="fas fa-envelope"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="4" class="px-6 py-10 text-center text-gray-500">
                                <div class="flex flex-col items-center">
                                    <div class="w-16 h-16 rounded-full bg-gray-100 flex items-center justify-center mb-3">
                                        <i class="fas fa-users text-gray-400 text-2xl"></i>
                                    </div>
                                    <p class="text-gray-500 font-medium">No volunteers registered yet</p>
                                </div>
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
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

.delay-200 {
    animation-delay: 0.2s;
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
