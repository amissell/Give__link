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
    // ✅ 1. Validate input
    $request->validate([
        'title' => 'required',
        'description' => 'required',
        'startEventAt' => 'required|date',
        'endEventAt' => 'required|date|after:startEventAt',
        'capacity' => 'required|integer|min:1',
        'type' => 'required|in:volunteering,donation,awareness',
        'ville_id' => 'required|exists:villes,id',
        'image' => 'nullable|image|max:2048',
    ]);

    // ✅ 2. Prepare image upload (if there is one)
    $imagePath = null; // initialize empty
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('events', 'public'); // returns something like 'events/photo.jpg'
    }

    // ✅ 3. Create the event
    $event = Event::create([
        'title' => $request->title,
        'description' => $request->description,
        'startEventAt' => $request->startEventAt,
        'endEventAt' => $request->endEventAt,
        'capacity' => $request->capacity,
        'type' => $request->type,
        'ville_id' => $request->ville_id,
        'image' => $imagePath, // may be null if no image was uploaded
        'organization_id' => auth()->user()->organization->id,
    ]);

    // ✅ 4. Redirect to show page
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
    // dd($event->ville);

    return view('events.show', compact('event'));
}

}
