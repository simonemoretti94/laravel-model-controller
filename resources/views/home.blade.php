<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">

        <!-- Styles -->
    </head>
    <body>
    @foreach ($movies_data as $movie)
        <p style="color: black; font-size: 20px;">{{$movie['title']}}</p>    
    @endforeach
    </body>
</html>
