<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use Illuminate\Support\Str;

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
        // Validasi data
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'description' => 'required|string',
            'author_id' => 'required|integer|exists:users,id',
            'status' => 'required|in:available,draft,cancelled',
            'address' => 'nullable|string|max:255',
            'city' => 'required|string|max:100',
            'event_date' => 'required|date',
            'event_time' => 'required',
            'event_type' => 'required|string|max:50',
            'price' => 'required|numeric|min:0',
            'participant_limit' => 'required|integer|min:0',
        ]);

        // Simpan gambar jika ada
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('events', 'public');
        }

        // Buat slug unik dari judul
        $slug = Str::slug($request->title);
        $existingCount = Event::where('slug', $slug)->count();
        if ($existingCount > 0) {
            $slug .= '-' . ($existingCount + 1);
        }

        // Simpan data ke database
        $event = Event::create([
            'title' => $request->title,
            'image' => $imagePath,
            'description' => $request->description,
            'author_id' => $request->author_id,
            'status' => $request->status,
            'address' => $request->address,
            'city' => $request->city,
            'event_date' => $request->event_date,
            'event_time' => $request->event_time,
            'event_type' => $request->event_type,
            'price' => $request->price,
            'participant_limit' => $request->participant_limit,
            'participant_count' => 0,
            'total_revenue' => 0,
            'slug' => $slug,
            'created_at' => now(),
        ]);

        return redirect()->back()->with('success', 'Event berhasil disimpan!');
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
