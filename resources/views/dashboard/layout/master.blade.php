<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | Help Center</title>
    @vite('resources/sass/dashboard/main.scss')
</head>
<body>
    @yield('main')
    @vite('resources/js/app.js')
</body>
</html>