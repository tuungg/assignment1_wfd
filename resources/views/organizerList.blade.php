@extends('template.template')

@section('layout_content')

<div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg">
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Organizer List</h1>
        <a href="/createOrganizer" class="bg-blue-500 text-white px-4 py-2 font-bold rounded-lg me-3 hover:bg-blue-600">Add Organizer</a>
    </div>

    <table class="table-auto w-full text-left">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2">No</th>
                <th class="px-4 py-2">Organizer Name</th>
                <th class="px-4 py-2">About</th>
                <th class="px-4 py-2">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($organizers as $index => $organizer)
            <tr class="border-b">
                <td class="px-4 py-2">{{$index+1}}</td>
                <td class="px-4 py-2">
                    <a href="/organizerDetail/{{$organizer->id}}" class="text-black-500 hover:underline">
                        {{$organizer->name}}
                    </a>
                </td>
                
                <td class="px-4 py-2">{{$organizer->description}}</td>
                
                <td class="px-4 py-2">
                    <div class="flex items-center space-x-2">
                        <a href="/updateOrganizer/{{$organizer->id}}" class="flex items-center bg-blue-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-600">
                            Edit
                        </a>

                        <form action="/deleteOrganizer/{{$organizer->id}}" method="POST" class="inline-flex items-center">
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
