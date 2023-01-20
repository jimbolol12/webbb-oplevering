<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function addEvent(){
        // ophalen van data uit database
        $events = Event::all();

        return view('events-list', [
            'events' => $events,
        ]);
    }
    public function deleteEvent($eventId){
        $event = Event::findOrFail($eventId);
        $event->delete();

        return redirect()->route('add-event');
    }
    public function changeEvent($eventId){
        $event = Event::findOrFail($eventId);

        return view('change-event-form', ['event' => $event]);
    }
    public function processAddEvent(Request $request){
        $newEvent = new Event();
        $newEvent->name = $request->name;
        $newEvent->photo = $request->photo;
        $newEvent->event_start = $request->event_start;
        $newEvent->event_end = $request->event_end;
        $newEvent->available_tickets = $request->available_tickets;
        $newEvent->location = $request->location;
        $newEvent->price = $request->price;
        $newEvent->description = $request->description;

        $newEvent->save();

        return redirect()->route('add-event');
    }
    public function listEvents(){
        // ophalen van data uit database
        $events = Event::all();

        return view('list-events', [
            'events' => $events,
        ]);
    }
    public function processChangeEvent($eventId, Request $request){
        $event = Event::where("id", $eventId)->first();
        $event->name = $request->input('name');
        $event->photo = $request->input('photo');
        $event->event_start = $request->input('event_start');
        $event->event_end = $request->input('event_end');
        $event->available_tickets = $request->input('available_tickets');
        $event->location = $request->input('location');
        $event->price = $request->input('price');
        $event->description = $request->input('description');
        $event->save();

        return redirect()->route('add-event');
    }
}