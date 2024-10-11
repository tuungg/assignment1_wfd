@extends('template.template')

@section('layout_content')
<div class="flex justify-center items-center min-h-screen bg-gray-100">
    <div class="bg-white p-8 rounded shadow-md max-w-lg w-full">
        <h1 class="text-2xl font-bold mb-6 text-center">Update Organizer</h1>
        <form action="/updateOrganizer/{{$organizer->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="organizerName" class="block text-sm font-medium text-gray-700">
                    Organizer Name
                </label>
                <input type="text" name="name" id="name" value ="{{$organizer->name}}" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <div class="mb-4 flex space-x-4">
                <div class="w-1/2">
                    <label for="facebook" class="block text-sm font-medium text-gray-700">Facebook</label>
                    <input type="text" name="facebook_link" id="facebook_link" value="{{$organizer->facebook_link}}"class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                </div>
                <div class="w-1/2">
                    <label for="socialX" class="block text-sm font-medium text-gray-700">X</label>
                    <input type="text" name="x_link" id="x_link" value="{{$organizer->x_link}}" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                </div>
            </div>

            <div class="mb-4">
                <label for="website" class="block text-sm font-medium text-gray-700">Website</label>
                <input type="text" name="website_link" id="website_link" value="{{$organizer->website_link}}" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <div class="mb-4">
                <label for="about" class="block text-sm font-medium text-gray-700">About</label>
                <textarea name="description" id="description" rows="4" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">{{$organizer->description}}</textarea>
            </div>

            <div class="flex">
                <button type="submit" class="bg-blue-500 text-white me-2 py-2 px-4 font-bold rounded-lg shadow hover:bg-blue-600">Save</button>
                <a href="/organizerList" class="bg-gray-500 text-white py-2 px-4 font-bold rounded-lg shadow hover:bg-gray-600">Back</a>
            </div>
        </form>
    </div>
</div>
@endsection
