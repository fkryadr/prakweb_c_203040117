<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>WPU Blog | {{$title}}</title>
</head>
<body>

<style>

</style>


    @include('partials.navbar')

<div class="text-3xl font-bold underline container m-4">
    @yield('container')
</div>

</body>
</html>
