@extends('template.template')

@section('layout_content')

<div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold">Event Category List</h1>
            <a href = "/createEventCategory" class="bg-blue-500 text-white font-bold px-4 py-2 rounded-lg hover:bg-blue-600">Create Category</a>
        </div>

        <table class="table-auto w-full text-left">
            <thead>
                <tr class="bg-gray-200">
                    <th class="px-4 py-2">No</th>
                    <th class="px-4 py-2">Event Category Name</th>
                    <th class="px-4 py-2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($event_categories as $index => $event_category)
                <tr class="border-b">
                    <td class="px-4 py-2">{{$index+1}}</td>
                    <td class="px-4 py-2">{{$event_category->name}}</td>

                    <td class="px-4 py-2">
                        <div class="flex items-center space-x-2">
                            <a href="/updateEventCategory/{{$event_category->id}}" class="flex items-center bg-blue-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-600">
                                Edit
                            </a>

                            <form action="/deleteEventCategory/{{$event_category->id}}" method="POST">
                                @csrf 
                                @method("DELETE")
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
    @endsection