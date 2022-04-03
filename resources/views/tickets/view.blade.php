@extends('tickets.layout')

@section('content')
    <div class="mt-14 bg-slate-100 w-1/3 m-auto rounded-md shadow-xl">
        @if($tickets->count() == 0)
            <div class="p-4 text-center border-2 rounded-md border-red-500 bg-red-300 shadow text-red-900 py-20 text-xl"><span>Ticket s číslom {{$request->get('id')}}. neexistuje.</span></div>
        @endif
        @foreach($tickets as $ticket)
            <div class="p-4 border-b-2 w-4/5 m-auto py-12">
                <a class="text-center text-slate-900 inline-block" href="/ticket?id={{$ticket->id}}">Ticket č. {{$ticket->id}}</a><button disabled class="inline-block float-right text-xs text-slate-50 bg-green-700 p-1 rounded text-center px-2 shadow">Open</button>
                <h2 class="w-full block font-light p-2 border-2 mt-4 rounded text-xs text-left">{{$ticket->message}}</h2>
                <h3 class="p-2 text-slate-50 mt-4 bg-slate-800 w-3/5 text-xs rounded-md text-center rounded-r-none border-r-slate-100 border-r-2 inline-block shadow">{{$ticket->name}}</h3>@if(!$ticket->file == null)<button class="w-2/5 text-xs bg-slate-800 p-2 rounded-md rounded-l-none text-slate-50 hover:bg-slate-700 duration-300 shadow" onclick="location.href='{{asset('storage/images/'.$ticket->file)}}'">Príloha</button>@else<button class="w-2/5 text-xs bg-slate-800 p-2 rounded-md rounded-l-none text-slate-50 hover:bg-slate-700 duration-300 shadow" disabled>Bez prílohy</button>@endif
                <h4 class="text-xs p-2 m-auto font-light pb-0">{{$ticket->email}}</h4>
                {{--                <img src="{{asset('storage/images/'.$ticket->file)}}">--}}
            </div>
        @endforeach
    </div>
@endsection
