<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="{{ asset('build/assets/style.css') }}">
{{--    @vite(['resources/css/style.css'])--}}
    <title>@yield('title') - Backend2</title>
</head>
<body>
    <header>
        <p>
            Backend2
            <a class="home-page" href="/">Home</a>
        </p>
    </header>
    <div class="container">
        @yield('main_content')
    </div>
    <footer>
        <p>© 2018 - Backend2</p>
    </footer>
</body>
</html>
