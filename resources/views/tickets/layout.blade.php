<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/app.css">
        <title>@if(isset($title)){{$title}}@endif</title>
    </head>
    <body class="bg-slate-300">
        @yield('content')
    </body>
</html>
