<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>NeuPizza</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href='/css/main.css' rel='stylesheet'>
    </head>
    <body class="antialiased">
      @yield('content')
    </body>

    <footer>
      <p>Copyright 2020 Pizza House</p>
    </footer>
</html>