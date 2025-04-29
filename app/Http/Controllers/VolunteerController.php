<?php

namespace App\Http\Controllers;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
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

    if ($user->hasRole('volunteer')) {
        $event->volunteers()->attach($user->id);
        return redirect()->route('event.infos', $event->id)
                         ->with('success', 'You have successfully joined the event!');
    }
    return redirect()->route('register');
 }
    public function eventInformations(Event $event){
        // dd($event);
        return view('Volunteers.joinEvent', compact('event'));
    }
}
