<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CRUD Teste{{ isset($title) ? " - " . $title : ""}}</title>

        {{-- Bootstrap --}}
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

        {{-- Styles Main --}}
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    </head>
    <body class="bg-light">
        <header>
            @include('template.menu')
        </header>
        <main>
            @yield("content")
        </main>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="https://kit.fontawesome.com/39fe180749.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/jquery.min.js')}}"></script>
        @yield('scripts')
    </body>
</html>
