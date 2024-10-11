@extends('template.template')

@section('layout_content')

<div class="max-w-full mx-auto bg-white p-6 rounded-lg shadow-lg">
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Events List</h1>
        <a href="/createEvent" class="bg-blue-500 text-white px-4 py-2 font-bold rounded-lg hover:bg-blue-600">Create Event</a>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full table-auto text-left">
            <thead>
                <tr class="bg-gray-200">
                    <th class="px-4 py-2">No</th>
                    <th class="px-4 py-2">Name</th>
                    <th class="px-4 py-2">Date</th>
                    <th class="px-4 py-2">Location</th>
                    <th class="px-4 py-2">Organizer</th>
                    <th class="px-4 py-2">About</th>
                    <th class="px-4 py-2">Tags</th>
                    <th class="px-4 py-2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($events as $index => $event)
                <tr class="border-b">
                    <td class="px-4 py-2">{{ $index + 1 }}</td>
                    <td class="px-4 py-2">{{ $event->title }}</td>
                    <td class="px-4 py-2">{{ \Carbon\Carbon::parse($event->date)->format('D, M d Y h:i A') }}</td>
                    <td class="px-4 py-2">{{ $event->venue }}</td>
                    <td class="px-4 py-2">{{ $event->organizer->name }}</td>
                    <td class="px-4 py-2">
                        <div class="truncate max-w-xs">
                            {{ Str::limit($event->description, 50) }}
                        </div>
                    </td>
                    <td class="px-4 py-2">
                        <span class="inline-block bg-gray-200 text-gray-700 text-sm px-2 py-1 rounded-full">{{ $event->tags }}</span>
                    </td>
                    <td class="px-4 py-2">
                        <div class="flex items-center space-x-2">
                            <a href="/updateEvent/{{ $event->id }}"  class="flex items-center bg-blue-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-600">
                                Edit
                            </a>
                            <form action="/deleteEvent/{{ $event->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="bg-red-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-red-800">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
