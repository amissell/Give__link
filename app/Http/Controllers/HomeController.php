<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Organization;
use App\Models\User;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Get the latest 3 events
        $events = Event::latest()->take(3)->get();

        // Get the latest 6 approved organizations
        $organizations = Organization::where('status', 'approved')->with('category')->latest()->take(6)->get();

        // Get the total number of events
        $totalEvents = Event::count();

        // Get the total number of approved organizations
        $totalOrganizations = Organization::where('status', 'approved')->count();

        // Get the total number of volunteers (users who have events)
        $totalVolunteers = User::whereHas('events')->count(); // Count users who have events (volunteers)

        // Pass the data to the view
        return view('home', compact('events', 'organizations', 'totalVolunteers', 'totalEvents', 'totalOrganizations'));
    }
}
