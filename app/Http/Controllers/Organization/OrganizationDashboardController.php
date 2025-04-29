<?php

namespace App\Http\Controllers\Organization;

use App\Http\Controllers\Controller;
use App\Models\Event;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class OrganizationDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dashboard()
    {
        $organization = Auth::user()->organization; 
        $events = $organization->events()->withCount('volunteers')->paginate(10); 
        $totalEvents = $events->count(); 
        $totalVolunteers = $events->sum('volunteers_count'); 
        
        return view('organizations.dashboard', compact('events', 'totalEvents', 'totalVolunteers'));
    }

    
    
    public function index()
    {
        $organization = auth()->user()->organization;
        $events = $organization->events;
        return view('organizations.dashboard', compact('events'));
    }


}
