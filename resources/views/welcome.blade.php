<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name') }}</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())

                    @else
                        {{-- <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a> --}}
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Learnik
                </div>
                <a class="btn btn-default" href="{{ route('themes.index') }}" role="button">
                  @lang('welcome.start_learning')
                </a>

            </div>
        </div>
    </body>
</html>
