<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<!-- HEAD -->
@include('layouts.partials._head')
<body>
    <div id="app">
        <!-- NAVIGATION -->
        @include('layouts.partials._navigation')
        <!-- CONTENT -->
        @yield('content')
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
</body>
</html>
