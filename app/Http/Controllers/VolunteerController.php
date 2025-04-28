<?php

namespace App\Http\Controllers;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    public function myEvents(Request $request)
    {
        $user = Auth::user();
        
        $filter = $request->query('filter', 'upcoming');
        
        $events = $user->events()->with('ville')->where(function ($query) use ($filter) {
            if ($filter === 'upcoming') {
                $query->where('startEventAt', '>=', now());
            } elseif ($filter === 'past') {
                $query->where('startEventAt', '<', now());
            }
        })->get();
        return view('Volunteers.events', compact('events', 'filter'));
    }
    public function cancelEvent(Event $event)
    {
        $user = Auth::user();
        
        $user->events()->detach($event->id);
        return redirect()->route('volunteer.events')->with('success', 'You have left the event.');
    }


    public function joinEvent(Event $event)
    {
        $user = auth()->user();

        // Check if already joined
        if (!$user->events->contains($event)) {
            $user->events()->attach($event);
        }

        return redirect()->back()->with('success', 'You have joined the event successfully!');
    }

}
