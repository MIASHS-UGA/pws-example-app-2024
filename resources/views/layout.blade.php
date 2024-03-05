<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <!-- Styles -->
        <style>
            body {
                padding:0;
                margin:0;
            }
            .header,
            .footer {
                display:block;
                width:100%;
                background:#9ca3af;
                padding: 20px;
            }
            .header ul li {
                display:inline;
            }
            h1 {
                padding:20px;
                text-align:center;
            }
            .content {
                padding:20px;
            }
               </style>
    </head>
    <body class="antialiased">
        <div class="header" >
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/contact">Contact</a></li>
                <li><a href="/project">Projects</a></li>
                <li><a href="/login">Login</a></li>
            </ul>
        </div>
        <h1>
        @yield('title','Titre par défaut')
        </h1>

        <div class="content">
        @yield('content')
        </div>

        <div class="footer">Ceci est mon footer</div>
    </body>
</html>
