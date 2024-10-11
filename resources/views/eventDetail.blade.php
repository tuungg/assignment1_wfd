@extends('template.template')

@section('layout_content')

<div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg">
        <p class="font-bold text-gray-600">{{ $event->event_category->name}}</p>
        <h1 class="text-3xl font-bold text-black mb-4">{{$event->title}}</h1>

        <img src="https://t3.ftcdn.net/jpg/06/33/38/88/360_F_633388889_VEg0OqXK3ZRAz22w4zOK7K1FWpbCi7Mg.jpg"
        alt="Event Image" 
        class="w-full h-auto object-cover rounded-lg mb-10">

        <div class="flex items-center mb-4">
            <div>
                <h3 class="text-lg font-semibold">Organizer</h3>
                <p class="text-gray-600">{{$event->organizer->name}}</p>
            </div>
        </div>

        <div class="flex items-center mb-4">
            <div>
                <h3 class="text-lg font-semibold">Date and Time</h3>
                <p class="text-gray-600">{{$event->date}}</p>
            </div>
            <div class="ms-10">
                <h3 class="text-lg font-semibold">Location</h3>
                <p class="text-gray-600">{{$event->venue}}</p>
            </div>
            <div class="ms-10">
                <h3 class="text-lg font-semibold">Booking URL</h3>
                <a href="https://www.indonesiaexpo.com/booking" class="text-blue-600 underline">{{$event->booking_url}}</a>
            </div>
        </div>

        <div class="mb-4">
            <h3 class="text-lg font-semibold">About This Event</h3>
            <p class="text-gray-600">
            {{$event->description}}
            </p>
        </div>

        <div class="mt-4 flex justify-between items-center">
            <div class="flex space-x-2">
                <span class="bg-gray-200 text-gray-700 px-3 py-1 rounded-full text-sm">{{$event->tags}}</span>
            </div>
        </div>
        <div class="flex mt-5">
            <a href="/event" class="bg-gray-500 text-white py-2 px-4 rounded-lg font-bold shadow hover:bg-gray-600">Back</a>
        </div>
    </div>

    @endsection