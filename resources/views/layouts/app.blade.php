@vite('resources/css/app.css')
@vite('resources/js/app.js')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Upwork Clone</title>
        <style>
          [x-cloak] { display: none !important; }
        </style>
        @livewireStyles
    </head>
    <body>
      <div class="container mx-auto px-4">
        @include('partials.navbar')
        <livewire:flash />
        @yield('content')
      </div>
      @livewireScripts
    </body>
</html>