<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class VolunteerController extends Controller
{
    public function myEvents()
    {
        $user = Auth::user();
        // dd($user->events()->pluck('events.id'));
        $events = $user->events()->with('ville')->get();
        return view('Volunteers.events', compact('events'));
    }

    public function cancelEvent(Event $event)
    {
        $user = Auth::user();
        
        $user->events()->detach($event->id);
        return redirect()->route('Volunteers.events')->with('success', 'You have left the event.');
    }
    
    public function join(Request $request, $eventId)
    {
        $event = Event::findOrFail($eventId);
        $user = auth()->user();
        // dd($user->events);
        
        if ($event->volunteers()->where('user_id', $user->id)->exists()) {
            return redirect()->route('Volunteers.events')->with('error', 'You are already registered for this event.');
        }
        $event->volunteers()->syncWithoutDetaching([$user->id]);
        return redirect()->route('Volunteers.events')->with('success', 'You have successfully joined the event.');
    }








    public function eventInformations(Event $event){
        // dd($event);
        return view('Volunteers.joinEvent', compact('event'));
    }

    public function showEvent($id)
    {
        $event = Event::find($id);  // Fetch the event by ID
        if ($event) {
            return view('Volunteers.show_event', compact('event'));  // Return the view with event data
        } else {
            return redirect()->route('Volunteers.events')->with('error', 'Event not found');
        }
    }





    
}
