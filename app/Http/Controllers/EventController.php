<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::all();
        // You can pass the events to the view if needed
        return view('event.index', compact('events'));
        // return view('event.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // This method can be used to show a form for creating a new event
        return view('event.create');
        // return view('event.create'); // Assuming you have a create view
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEventRequest $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|string|max:255', // asumsi path/url gambar
            'description' => 'required|string',
            'author_id' => 'required|exists:users,id',
            'status' => 'required|in:available,unavailable',
            'address' => 'required|string',
            'city' => 'required|string|max:100',
            'event_date' => 'required|date',
            'event_time' => 'required|date_format:H:i',
            'event_type' => 'required|in:workshop,zoom_meeting,seminar,webinar',
            'price' => 'required|numeric|min:0',
            'participant_limit' => 'required|integer|min:1',
            'slug' => 'required|string|unique:events,slug',
        ]);
    
        $event = Event::create([
            ...$validated,
            'participant_count' => 0,
            'total_revenue' => 0, // boleh dihapus jika kamu pakai accessor
        ]);
    
        // Redirect to the event index page after successful creation
        return redirect()->route('event.index')->with('success', 'Event created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $event = Event::where('slug', $slug)->firstOrFail();
        return view('event.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        // This method can be used to show a form for editing an existing event
        return view('event.edit', compact('event'));
        // return view('event.edit'); // Assuming you have an edit view
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEventRequest $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        //
    }
}
