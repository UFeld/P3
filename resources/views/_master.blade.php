<!doctype html>
<html>
<head>
    <title>@yield('title', 'Dev Best Friend')</title>
    <meta charset='utf-8'>
    <link href="/css/p3.css" type='text/css' rel='stylesheet'>
@yield('head')
</head>
<body>

    <header>
      <!--Change Image Ref Later-->
        <img
        src='http://making-the-internet.s3.amazonaws.com/laravel-foobooks-logo@2x.png'
        style='width:300px'
        alt='Foobooks Logo'>


    </header>

    <section>
        <h1>@yield('content')</h1>
    </section>

    <footer>
        &copy; {{ date('Y') }}
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
@yield('body')
</body>
</html>
