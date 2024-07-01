<!DOCTYPE html>
{{-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> --}}
<html>
    @include('components.head')
    
    <body class="theme-color-turquiose preloader-theme" data-preloader="1">
        @include('components.header')

        @yield('content')

        {{-- @include('components.footer') --}}

    </body>

    @include('components.scripts')
</html>