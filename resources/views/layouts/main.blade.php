<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book Store</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    @include('common.navigation', [
        'current_page' => $current_page
    ])
    @yield('content')
<div id="partners"></div>
    @viteReactRefresh
    @vite('resources/css/app.scss')
    @vite('resources/js/partners.jsx')
</body>
</html>