<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/white_kiiu_logomark.svg">
    <title>Kiiu Tuulik</title>
    @vite('resources/css/app.css')
</head>
<body>
    @include('partials.nav')
    @yield('content')
    @include('partials.footer')
</body>
</html>
