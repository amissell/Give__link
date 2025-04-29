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
        
        $events = $user->events()->with('ville')->get();
        return view('Volunteers.events', compact('events'));
    }

    public function cancelEvent(Event $event)
    {
        $user = Auth::user();
        
        $user->events()->detach($event->id);
        return redirect()->route('Volunteers.events')->with('success', 'You have left the event.');
    }




    public function join(Event $event)
    {
        $user = auth()->user();
        
        $alreadyJoined = DB::table('event_volunteer')
        ->where('event_id', $event->id)
        ->where('user_id', $user->id)
        ->exists();
        
        if ($alreadyJoined) {
            return redirect()->back()->with('error', 'You have already joined this event.');
        }
        $user->events()->attach($event->id);

        
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
