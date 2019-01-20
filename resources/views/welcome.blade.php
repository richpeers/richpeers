<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Artisan Web</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <script defer src="https://use.fontawesome.com/releases/v5.6.3/js/brands.js" integrity="sha384-VLgz+MgaFCnsFLiBwE3ItNouuqbWV2ZnIqfsA6QRHksEAQfgbcoaQ4PP0ZeS0zS5" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.6.3/js/fontawesome.js" integrity="sha384-treYPdjUrP4rW5q82SnECO7TPVAz4bpas16yuE9F5o7CeBn2YYw1yr5oC8s8Mf8t" crossorigin="anonymous"></script>

    <!-- Styles -->
    <style>
        html, body {
            background-color: #337AB7;
            color: #ffffff;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
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
            color: #ffffff;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        /*.links > a.github {*/
        /*color: #24292E;*/
        /*}*/

        /*.links > a.linkedin {*/
        /*color: #ffffff;*/
        /*}*/

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            Artisan Web
        </div>

        <div class="links">
            <a href="https://github.com/richpeers" target="_blank"><i class="fab fa-github fa-3x"></i></a>
            <a href="https://www.linkedin.com/in/richpeers/" target="_blank"><i class="fab fa-linkedin fa-3x"></i></a>
            <a href="https://laravelphp.uk/" target="_blank"><i class="fab fa-slack fa-3x"></i></a>

        </div>
    </div>
</div>
</body>
</html>
