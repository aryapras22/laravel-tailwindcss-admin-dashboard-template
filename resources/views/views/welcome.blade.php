<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite('resources/css/app.css')

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */
            
        </style>
    </head>
    <header>
        @include('shared.welcome.partials.header')
    </header>
    <body>
        
                <!-- Page sections -->
                @include('shared.welcome.partials.herohome')
                @include('shared.welcome.partials.features')
                @include('shared.welcome.partials.features-blocks')
                @include('shared.welcome.partials.testimonials')
                @include('shared.welcome.partials.newsletter')
    </body>
    <footer>
        @include('shared.welcome.partials.footer')
    </footer>
</html>
