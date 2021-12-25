<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/client.css') }}">
    <title>{{ config('app.name') }}</title>
</head>
<body>
    @include('clients.includes.header')
    @yield('content')
</body>
</html>