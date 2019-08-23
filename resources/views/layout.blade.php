<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Esteve G F')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="prelaod" as="style">

    </head>
    <body>

        @include('common.header')

        @yield('content')

    </body>
</html>

<style>
    .bar-margin {
        margin-top: 55px;
    }

     @media (min-width: 600px) {
        .container {
            padding: 0 4em!important;
        }
    }

    @media (min-width: 800px) {
        .container {
            padding: 0 8em!important;
        }
    }

    @media (min-width: 1100px) {
        .container {
            padding: 0 12em!important;
        }
    }
</style>
