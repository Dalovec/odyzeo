@extends('emails.layout')
@section('style')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Rajdhani&display=swap');
    #wrapper{
        background-color: transparent;
        padding: 10px;
        font-family: 'Rajdhani', sans-serif;
        width: 100%;
    }
    #header{
        width: 80%;
        margin: auto;
        padding: 10px;
        text-align: center;
        font-weight: normal;
        border-bottom: 1px solid #8a8a8a;
    }
    #container{
        width: 50%;
        background-color: #F1F5F9;
        border-radius: 10px;
        padding: 10px;
        margin: auto;
    }
    #message{
        width: 80%;
        background-color: #F8FAFC;
        border-radius: 10px 10px 0 0;
        font-weight: normal;
        font-size: small;
        border: 1px solid #E2E8F0;
        padding: 10px;
        margin: 10px auto auto;
    }
    #sender{
        width: 80%;
        border-radius: 0 0 10px 10px;
        text-align: center;
        padding: 10px;
        background-color: #7c8aa9;
        font-weight: normal;
        color: white;
        text-decoration: none;
        margin: auto auto 10px;
    }
</style>
@endsection
@section('content')
    <div id="wrapper">
        <div id="container">
            <h2 id="header">Nový ticket</h2>
            <pre id="message">{{$ticket->getMessage()}}</pre>
            <h3 id="sender">Odosielateľ: {{$ticket->getName()}} - {{$ticket->getMail()}}</h3>
        </div>
    </div>
@endsection
