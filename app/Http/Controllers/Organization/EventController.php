<?php

namespace App\Http\Controllers\Organization;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\ville;
class EventController extends Controller
{
    public function index()
    {
        return redirect()->route('organizations.dashboard');
    }

    public function create()
    {
        
        $villes = Ville::orderBy('name')->get();
        return view('events.create', data: compact('villes')); 
    }


    public function store(Request $request)
{
    $request->validate([
        'title' => 'required',
        'description' => 'required',
        'startEventAt' => 'required|date',
        'endEventAt' => 'required|date|after:startEventAt',
        'capacity' => 'required|integer|min:1',
        'type' => 'required|in:volunteering,donation,awareness',
        'ville_id' => 'required|exists:villes,id',
        'image' => 'nullable|image',
    ]);
    
    $imagePath = $request->file('image')->store('events', 'public');
    

    $event = Event::create([
        'title' => $request->title,
        'description' => $request->description,
        'startEventAt' => $request->startEventAt,
        'endEventAt' => $request->endEventAt,
        'capacity' => $request->capacity,
        'type' => $request->type,
        'ville_id' => $request->ville_id,
        'image' => $imagePath, 
        'organization_id' => auth()->user()->organization->id,
    ]);

    return redirect()->route('events.show', $event->id)
        ->with('success', 'Event created successfully!');
}
    


    public function edit(Event $event)
    {
        $this->authorize('update', $event);
        $villes = Ville::orderBy('name')->get();
        return view('events.edit', compact('event', 'villes'));
    }


    public function update(Request $request, Event $event)
    {
        $this->authorize('update', $event);

        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'capacity' => 'required|integer',
            'startEventAt' => 'required|date',
            'endEventAt' => 'required|date|after:startEventAt',
        ]);

        $event->update($validated);

        return redirect()->route('organizations.dashboard')->with('success', 'Event updated.');
    }

    public function destroy(Event $event)
    {
        $this->authorize('delete', $event);
        $event->delete();
        return redirect()->route('organizations.dashboard')->with('success', 'Event deleted.');
    }


    public function show($id)
    {
        $event = Event::findOrFail($id);
        return view('events.show', compact('event'));
    }

    public function organizationEvents()
    {
        $events = Event::where('organization_id', auth()->user()->organization->id)->get();
        return view('events.organizationEvents', compact('events'));
    }

    public function viewAllEventHomePage()
    {
        $events = Event::orderBy('startEventAt', 'asc')->paginate(12);
        return view('events.viewAllEventHomePage', compact('events'));
    }
    
    public function myEvents()
    {
        $user = auth()->user();
        $events = $user->events;
        return view('events.myEvents', compact('events'));
    }



}
