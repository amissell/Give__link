<?php

namespace App\Http\Controllers\Organization;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        return redirect()->route('organizations.dashboard');
    }

    public function create()
    {
        return view('events.create');
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
        ]);

        $event = Event::create([
            'title' => $request->title,
            'description' => $request->description,
            'startEventAt' => $request->startEventAt,
            'endEventAt' => $request->endEventAt,
            'capacity' => $request->capacity,
            'type' => $request->type,
            'organization_id' => auth()->user()->organization->id,
        ]);

        return redirect()->route('events.show', $event->id)
            ->with('success', 'Event created successfully!');
    }

    public function edit(Event $event)
    {
        $this->authorize('update', $event);
        return view('events.edit', compact('event'));
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
}
