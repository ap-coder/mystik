<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    @yield('styles')
</head>


    @yield('content')

@yield('scripts')

</html>
