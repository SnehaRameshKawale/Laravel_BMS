<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Booking Managment System| @yield('title')</title>
    @include('layout.css')
    @yield('style')
</head>
<body>
    @yield('content')
    @include('layout.js')
    @yield('customjs')
</body>
</html>