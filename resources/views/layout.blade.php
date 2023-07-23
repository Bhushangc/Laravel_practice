<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href= "{{ url('css/site.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <div>
        <nav>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('about') }}">About</a>
            <a href="{{ route('guitars.index') }}">Guitars</a>
        </nav>
    </div> 
    @yield('content')
    @yield('script')
    
</body>
</html>