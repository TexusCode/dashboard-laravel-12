<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'T.Blog' }}</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @include('layouts.favicon')
</head>

<body class="bg-geekblue-black">
    @yield('content')
    @include('layouts.toastify')
</body>

</html>