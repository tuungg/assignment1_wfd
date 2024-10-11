<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventCategory;

class EventCategoryController extends Controller
{
    public function createEventCategory(Request $request){
        $newEventCategory = $request->validate([
            'name' => 'required',
        ]);

        $event_category = EventCategory::create([
            'name'=> $newEventCategory['name'],
        ]);
        return redirect('/eventCategoryList');
    }

    public function showAllEventCategory(){
        $event_categories = EventCategory::all();
        return view('eventCategoryList', [
            'event_categories' => $event_categories
        ]);
    }

    public function deleteEventCategory(int $id){
        $event_category = EventCategory::find($id);
        $event_category->delete();
        return redirect('/eventCategoryList');
    }

    public function getEventCategory(int $id){
        $event_category = EventCategory::find($id);
        return view('updateEventCategory', [
            'event_category' => $event_category
        ]);
    }

    public function updateEventCategory(int $id, Request $request){
        $event_category = EventCategory::find($id);
        $updateEventCategory = $request->validate([
            'name' => 'required',
        ]);

        $event_category->update([
            'name' => $updateEventCategory['name']
        ]);

        return redirect('/eventCategoryList');
    }
}
