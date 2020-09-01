<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>
                <div class="links">
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Register</a>
                    <a href="">Search</a>
                    <a href="">Detail</a>

                    <!-- @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/home') }}">Data CHANGE</a>
                        <a href="">LOGOUT</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                    @endauth
                    @endif -->
                    
                </div>
            </div>
        </div>
    </body>
</html>
