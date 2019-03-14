<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CSS for Backend Devs</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
        <link rel="stylesheet" href="/css/normalize.css">
        <link rel="stylesheet" href="/css/header.css">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <header class="section">
            <div class="container">
                <div class="header-top">
                    <h1>XCasts</h1>

                    <a href="#">SIGN IN</a>
                </div>

                <nav>
                    <a href="#">CATALOG</a>
                    <a href="#">SERIES</a>
                    <a href="#">PODCAST</a>
                    <a href="#">DISCUSSIONS</a>
                </nav>
            </div>
        </header>
        
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="box">
                            <a href="/episodes/1">episode 1 and episode 2</a>
                        </div>
                    </div>

                    <div class="col">
                        <div class="box">
                            <a href="/episodes/3">episode 3</a>
                        </div>
                    </div>

                    <div class="col">
                        <div class="box">Some Callout Text</div>
                    </div>

                    <div class="col">
                        <div class="box">Some Callout Text</div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
