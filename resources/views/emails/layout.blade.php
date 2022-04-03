<!DOCTYPE html>
<html>
<head>
    <title>@if(isset($title)){{$title}}@endif</title>
    @yield('style')
</head>
<body class="bg-slate-300">
@yield('content')
</body>
</html>
