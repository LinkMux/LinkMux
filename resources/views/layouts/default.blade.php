<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('include.head')
    @yield('header')
</head>
<body>
    <div id="app">
        @include('include.navbar')
        <div class="container">
            @yield('content')
        </div>
    </div>
</body>
    @include('include.script')
    @yield('script')
</html>
