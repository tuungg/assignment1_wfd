<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\OrganizerController;
use App\Http\Controllers\EventCategoryController;

// Event Routes
Route::get('/', [EventController::class, 'showAllEvent']);
Route::get('/eventDetail/{event_id}', [EventController::class, 'showEventDetail']);
Route::get('/event', [EventController::class, 'showAllEvent']);
Route::get('/eventList', [EventController::class, 'showEventList']);
Route::delete('/deleteEvent/{event_id}', [EventController::class, 'deleteEvent']);
Route::get('/createEvent', [EventController::class, 'showOrganizerAndEventCategory']);
Route::post('/createEvent', [EventController::class, 'createEvent']);
// Update Event
Route::get('/updateEvent/{event_id}', [EventController::class, 'getEvent']);
Route::put('/updateEvent/{event_id}', [EventController::class, 'updateEvent']);

// Organizer Routes
Route::get('/organizerList', [OrganizerController::class, 'showAllOrganizer']);
Route::get('/organizerDetail/{organizer_id}', [OrganizerController::class, 'showOrganizerDetail']);
Route::post('/createOrganizer', [OrganizerController::class, 'createOrganizer']);
Route::get('/createOrganizer', function(){ return view('createOrganizer'); });
Route::delete('/deleteOrganizer/{organizer_id}', [OrganizerController::class, 'deleteOrganizer']);
// Update Organizer
Route::get('/updateOrganizer/{organizer_id}', [OrganizerController::class, 'getOrganizer']);
Route::put('/updateOrganizer/{organizer_id}', [OrganizerController::class, 'updateOrganizer']);

// Event Category Routes
Route::get('/eventCategoryList', [EventCategoryController::class, 'showAllEventCategory']);
Route::post('/createEventCategory', [EventCategoryController::class, 'createEventCategory']);
Route::get('/createEventCategory', function(){ return view('createEventCategory'); });
Route::delete('/deleteEventCategory/{event_category_id}', [EventCategoryController::class, 'deleteEventCategory']);
// Update Event Category
Route::get('/updateEventCategory/{event_category_id}', [EventCategoryController::class, 'getEventCategory']);
Route::put('/updateEventCategory/{event_category_id}', [EventCategoryController::class, 'updateEventCategory']);