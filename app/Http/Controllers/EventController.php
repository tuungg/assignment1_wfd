<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventCategory;
use App\Models\Event;
use App\Models\Organizer;

class EventController extends Controller
{
    public function showAllEvent(){
        $events = Event::all();
        return view('event', [
            'events' => $events
        ]);
    }

    public function showEventDetail(int $id){
        $event = Event::find($id);
        return view('eventDetail', [
            'event' => $event
        ]);
    }

    public function showEventList(){
        $events = Event::all();
        return view('eventList', [
            'events' => $events
        ]);
    }

    public function deleteEvent(int $id){
        $event = Event::find($id);
        $event->delete();
        return redirect('/eventList');
    }

    public function createEvent(Request $request) {
        // Validasi input
        $newEvent = $request->validate([
            'title' => 'required',
            'date' => 'required',
            'venue' => 'required',
            'start_time' => 'required',
            'organizer_id' => 'required',
            'booking_url' => 'required',
            'description' => 'required',
            'tags' => 'required',
            'event_category_id' => 'required'
        ]);

        // Buat event baru
        $event = Event::create([
            'title' => $newEvent['title'],
            'date' => $newEvent['date'],
            'venue' => $newEvent['venue'],
            'start_time' => $newEvent['start_time'],
            'organizer_id' => $newEvent['organizer_id'],
            'booking_url' => $newEvent['booking_url'],
            'description' => $newEvent['description'],
            'tags' => json_encode($newEvent['tags']),
            'event_category_id' => $newEvent['event_category_id']
        ]);

        return redirect('/eventList');
    }

    public function showOrganizerAndEventCategory()
    {
        $organizers = Organizer::all();
        $event_categories = EventCategory::all();

        return view('createEvent', [
            'organizers' => $organizers,
            'event_categories' => $event_categories
        ]);
    }

    public function getEvent($event_id) {
        $event = Event::find($event_id);
        
        if (!$event) {
            return abort(404); // Jika event tidak ditemukan
        }
    
        $organizers = Organizer::all();  // Mengambil semua organizer
        $event_categories = EventCategory::all();  // Mengambil semua kategori event
    
        return view('updateEvent', compact('event', 'organizers', 'event_categories'));
    }
    
    
    public function updateEvent(int $id, Request $request){
        $event = Event::find($id);
        if (!$event) {
            return redirect('/eventList')->with('error', 'Event not found');
        }
    
        $updateEvent = $request->validate([
            'title' => 'required',
            'date' => 'required',
            'venue' => 'required',
            'start_time' => 'required',
            'organizer_id' => 'required',
            'booking_url' => 'required',
            'description' => 'required',
            'tags' => 'required',
            'event_category_id' => 'required'
        ]);
    
        $event->update([
            'title' => $updateEvent['title'],
            'date' => $updateEvent['date'],
            'venue' => $updateEvent['venue'],
            'start_time' => $updateEvent['start_time'],
            'organizer_id' => $updateEvent['organizer_id'],
            'booking_url' => $updateEvent['booking_url'],
            'description' => $updateEvent['description'],
            'tags' => $updateEvent['tags'],
            'event_category_id' => $updateEvent['event_category_id'],
        ]);
    
        return redirect('/eventList');
    }
}
