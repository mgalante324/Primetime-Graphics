<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'PrimeTime') }}</title>

        <link href="{{ asset('phantom/assets/css/main.css') }}" rel="stylesheet">
        <noscript><link rel="stylesheet" href="{{ asset('phantom/assets/css/noscript.css') }}" /></noscript>

    </head>
    <body class="is-preload">
      @yield('content')

<script src="{{ asset('js/app.js') }}" defer></script>

      <!-- Scripts -->
      <script src="{{ asset('phantom/assets/js/jquery.min.js') }}"></script>
      <script src="{{ asset('phantom/assets/js/browser.min.js') }}"></script>
      <script src="{{ asset('phantom/assets/js/breakpoints.min.js') }}"></script>
      <script src="{{ asset('phantom/assets/js/util.js') }}"></script>
      <script src="{{ asset('phantom/assets/js/main.js') }}"></script>

    </body>
</html>
