<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Esteve G F - Laravel')</title>
        <link rel="icon" type="image/x-icon" href="/icono.ico">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="preload" as="style">

    </head>
    <body>
        <header>
            @include('common.header')
        </header>

        @yield('content')

        @yield('scripts')

    </body>
</html>

<style>
    body {
      margin:0;
      font-family: 'Montserrat', sans-serif;
    }

    .bar-margin {
      margin-top: 50px;
    }

    .container {
      padding: 0 1em;
      font-size: small;
    }

    @media (min-width: 600px) {
      .container {
        padding: 0 4em!important;
        font-size: medium;
      }
    }

    @media (min-width: 800px) {
      .container {
        padding: 0 8em!important;
      }
    }

    @media (min-width: 1300px) {
      .container {
        padding: 0 14em!important;
        font-size: large;
      }
    }

    @media (min-width: 1200px) {
      .l-6 {
        width: 49.75%!important;
      }
    }

    @media (min-width: 501px) {
      .s-6 {
        width: 50%!important;
      }
    }

    .responsive {
      width: 100%;
      height: auto;
    }

    .center {
      text-align: center;
    }
</style>
