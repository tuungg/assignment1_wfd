@extends('template.template')

@section('layout_content')

<div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg">
    <h1 class="text-3xl font-bold text-black mb-4">Detail Organizer</h1>
    <h3 class="text-2xl font-semibold mb-4">{{$organizer->name}}</h3>
    <div class="mb-4">
        <p><strong>Facebook:</strong> {{$organizer->facebook_link}}</p>
        <p><strong>X:</strong> {{$organizer->x_link}}</p>
        <p><strong>Website:</strong> {{$organizer->website_link}}</p>
    </div>

    <div class="mb-4">
        <h3 class="text-lg font-semibold">About</h3>
        <p class="text-gray-600">{{$organizer->description}}</p>
    </div>

    <div class="flex items-center space-x-2 mb-4">
        <a href="/updateOrganizer/{{$organizer->id}}" class="flex items-center bg-blue-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-600">
            Edit
        </a>

        <form action="/deleteOrganizer/{{$organizer->id}}" method="POST" class="inline-flex items-center">
            @csrf 
            @method("DELETE")
            <button class="bg-red-600 text-white py-2 px-4 rounded-lg font-bold hover:bg-red-800">
                Delete
            </button>
        </form>

        <a href="/organizerList" class="flex items-center bg-gray-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-gray-600">
            Back
        </a>
    </div>
</div>

@endsection
