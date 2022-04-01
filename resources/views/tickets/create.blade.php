@extends('tickets/layout')

@section('content')
    <div class="h-screen flex">
        <form class="bg-slate-100 w-1/3 rounded-lg shadow-2xl m-auto" method="post" action="{{}}">
            <div class="m-12 mt-14">
                <label for="name">
                    <span class="text-2xl text-slate-800">Meno</span>
                    <input class="block w-full h-10 rounded shadow-md mb-4 p-4 mt-2 focus:h-12 duration-300 font-light" type="text" name="name" id="name">
                </label>
                <label for="mail">
                    <span class="text-2xl text-slate-800">E-mail</span>
                    <input class="block w-full h-10 rounded shadow-md mb-4 p-4 mt-2 focus:h-12 duration-300 font-light" type="email" name="mail" id="mail">
                </label>
                <label for="message">
                    <span class="text-2xl text-slate-800">Správa</span>
                    <textarea class="block w-full h-40 rounded shadow-md mb-4 p-4 mt-2 max-h-48 min-h-32 font-light" name="message" id="message"></textarea>
                </label>
                <label for="file">
                    <span class="text-2xl text-slate-800">Príloha</span>
                    <input class="block mb-4 mt-2 w-full file:mr-4 file:rounded-md file:border-0 file:py-2 file:px-6 file:text-sm file:bg-slate-900 file:text-slate-50 font-light hover:file:bg-slate-300 hover:file:text-slate-900 file:duration-300 text-sm" type="file" name="file" id="file">
                </label>
                <input type="submit" class="float-right mb-8 mt-6 text-slate-900 hover:text-slate-600 duration-300 outline-none border-0 p-4" value="Odoslať ticket">
            </div>
        </form>
    </div>
