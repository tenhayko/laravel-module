<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Module Blog</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">

       {{-- Laravel Mix - CSS File --}}
       {{-- <link rel="stylesheet" href="{{ mix('css/blog.css') }}"> --}}
       <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
        @yield('content')

        {{-- Laravel Mix - JS File --}}
        <script src="{{ asset('js/app.js') }}" defer></script>
    </body>
</html>
