<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>my-journey</title>
    @include('layouts.link')
    @vite('resources/css/app.css')
</head>

<body class="m-0 font-sans text-base antialiased font-normal leading-default">
    @yield('content')

    @include('layouts.scripts')
</body>
</html>
