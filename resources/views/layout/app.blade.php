<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="shortcut icon" href="https://www.boolean.careers/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>Bool</title>
    </head>
    <body>
        <header>
            @include('partials.header')
        </header>

        <main>
                @yield('content')
        </main>

        <footer>
                @include('partials.footer')
        </footer>

    </body>
</html>
