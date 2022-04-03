@extends('tickets/layout')

@section('content')
    <div class="h-screen flex">
        <form class="bg-slate-100 w-1/3 rounded-lg shadow-2xl m-auto" method="post" action="{{route('ticket-submit')}}" enctype="multipart/form-data">
            <div class="m-12 mt-14">
                <label for="meno">
                    <span class="text-2xl text-slate-800">Meno*</span>
                    <input class="block w-full h-10 rounded shadow-md mb-4 p-4 mt-2 focus:h-12 duration-300 font-light" type="text" name="meno" id="meno" maxlength="200">
                </label>
                <label for="mail">
                    <span class="text-2xl text-slate-800">E-mail*</span>
                    <input class="block w-full h-10 rounded shadow-md mb-4 p-4 mt-2 focus:h-12 duration-300 font-light" type="email" name="mail" id="mail" maxlength="100">
                </label>
                <label for="správa">
                    <span class="text-2xl text-slate-800">Správa</span>
                    <textarea class="block w-full h-40 rounded shadow-md mb-4 p-4 mt-2 max-h-48 min-h-32 font-light" name="správa" id="správa" maxlength="2000"></textarea>
                </label>
                <label for="file" class="m-b-12">
                    <span class="text-2xl text-slate-800">Príloha</span>
                    <input class="block mb-4 mt-2 w-full file:mr-4 file:rounded-md file:border-0 file:py-2 file:px-6 file:text-sm file:bg-slate-900 file:text-slate-50 font-light hover:file:bg-slate-300 hover:file:text-slate-900 file:duration-300 text-sm" type="file" name="file" id="file" accept="image/png, image/jpeg">
                    <span class="font-light p-2 ">2MB max</span>
                </label>
                <input type="submit" class="float-right mb-8 mt-6 text-slate-900 hover:text-slate-600 duration-300 outline-none border-0 p-4" value="Odoslať ticket">
                @if($errors->any())
                    <div class="">
                        <ul class="font-light p-4 bg-red-300 w-2/3 rounded shadow-md text-center">
                            @foreach($errors->all() as $error)
                                <li class="">{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if(\Illuminate\Support\Facades\Session::get('sucess') == 1)
                    <div class="">
                        <ul class="font-light p-4 bg-green-300 w-2/3 rounded shadow-md text-center">
                                <li class="">Ticket odoslaný</li>
                        </ul>
                    </div>
                @endif
            </div>
            @csrf
        </form>
        @php
        \Illuminate\Support\Facades\Session::forget('success');
        @endphp
    </div>
