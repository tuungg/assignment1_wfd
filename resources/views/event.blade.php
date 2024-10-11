@extends('template.template')

@section('layout_content')
<div>
    <br>    
    <h1 class="font-semibold text-4xl ms-10 text-left">Events in Surabaya</h1>
    <br>

</div>

<div class="px-6 pt-2 pb-6 sm:pt-2 sm:pb-6 sm:px-20 gap-x-10 gap-y-20 lg:px-8">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-3 gap-y-3">
        @foreach ($events as $index => $event)
            <div class="max-w-sm bg-white border border-white rounded-lg shadow">
                <a href="/eventDetail/{{$event->id}}" class="w-0 p-0 m-0">
                <img class="rounded-t-lg h-60 w-full object-cover" src="https://t3.ftcdn.net/jpg/06/33/38/88/360_F_633388889_VEg0OqXK3ZRAz22w4zOK7K1FWpbCi7Mg.jpg" alt="" />
                </a>
                <a href="/eventDetail/{{$event->id}}" class="w-0 p-0 m-0">
                    <div class="p-5">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-black">{{ $event->title }}</h5>
                        <div class="rounded-lg mt-4">
                            <p class="font-normal text-black">{{ $event->venue }}</p>
                            <p class="font-normal text-black">{{ $event->event_category->name}}</p>
                            <p class="font-bold text-black">{{ $event->date }}</p>
                            <p class="font-normal text-black">{{ $event->organizer->name }}</p>
                        </div>

                        <div class="rounded-lg mt-4">
                            <p class="font-normal text-black">{{ $event->description }}</p>
                        </div>

                        <br>
                        <p class="font-normal text-black"><mark class="bg-transparent font-semibold text-black">{{ $event->tags }}</mark></p>
                        <br>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
