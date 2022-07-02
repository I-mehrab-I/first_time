<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@0.3.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Document</title>

@yield('style')


</head>
<body>

    @include('layout.header')

    @yield('body')

    @yield('script')
    
    @yield('css')

    @yield('footer')
    
</body>
</html>