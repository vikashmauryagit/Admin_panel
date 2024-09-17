<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventsController extends Controller
{
   
    public function index()
    {
        $event = Event::all();
        return view("Event.view_event", compact('event'));
    }
    public function create()
    {

        return view("Event.add_event");
    }

    public function store(Request $request)
    {
        $request->validate([
            'event_date' => 'required',
            'event_title' => 'required',
            'event_img' => 'nullable|file|mimes:jpg,png,pdf,webp,docx|max:2048',
        ]);
        $filePath = null;
        if ($request->hasFile('event_img')) {
            $filePath = $request->file('event_img')->store('event_img', 'public');
        }
        $event = new Event();
        $event->event_date = $request->event_date;
        $event->event_title = $request->event_title;
        $event->event_img = $filePath;
        $event->save();
        return redirect()->route('Event.index')->with("success", "Event Data Stored Successfully.");
    }



    public function show(string $id)
    {
        $event = Event::find($id);

        return view("Event.display_event", compact('event'));
    }

    
    public function edit(string $id)
    {
        $event = Event::find($id);
        return view("Event.edit_event", compact('event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'event_date' => 'required',
            'event_title' => 'required',
            'event_img' => 'nullable|file|mimes:jpg,png,pdf,webp,docx|max:2048',
        ]);

        $event = Event::findOrFail($id);

        if ($request->hasFile('event_img')) {
            if ($event->event_img && Storage::disk('public')->exists($event->event_img)) {
                Storage::disk('public')->delete($event->event_img);
            }
            // $filePath = $request->file('upload_file')->store('uploads', 'public');
            $filePath = $request->file('event_img')->store('event_img', 'public');
            $event->event_img = $filePath;
        }
        $event->event_date = $request->event_date;
        $event->event_title = $request->event_title;
        $event->save();
        return redirect()->route('Event.index')->with("success", "Event Data Update Successfully..");
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $event = Event::findOrFail($id);
        if ($event->event_img && Storage::disk('public')->exists($event->event_img)) {
            Storage::disk('public')->delete($event->event_img);
        }
        $event->delete();
        return redirect()->route('Event.index')->with("success", "Event Data delete Successfully..");
    }
}
