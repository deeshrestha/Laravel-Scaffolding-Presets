<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="/css/app.css" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">

                <div class="bootstrap_button_test">
                    <h3>Bootstrap Buttons</h3>
                    <div class="btn-group" role="group" aria-label="...">
                      <button type="button" class="btn btn-default">Left</button>
                      <button type="button" class="btn btn-default">Middle</button>
                      <button type="button" class="btn btn-default">Right</button>
                    </div>
                </div>

                <div class="foundation_button_test">
                    <h3>Zurb Foundation Buttons</h3>
                    <a class="button primary" href="#">Primary</a>
                    <a class="button secondary" href="#">Secondary</a>
                    <a class="button success" href="#">Success</a>
                    <a class="button alert" href="#">Alert</a>
                    <a class="button warning" href="#">Warning</a>
                </div>

                <div class="Bulma_button_test">
                    <h3>Bulma Buttons</h3>
                    <div class="block">
                      <a class="button is-primary">Primary</a>
                      <a class="button is-info">Info</a>
                      <a class="button is-success">Success</a>
                      <a class="button is-warning">Warning</a>
                      <a class="button is-danger">Danger</a>
                    </div>
                </div>

                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
        <script src="js/app.js"></script>
    </body>
</html>
