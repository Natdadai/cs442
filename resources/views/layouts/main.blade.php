<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CS 442 Sample Laravel</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="text-3xl">
        Menu
    </div>
    <div>
        @yield('content')
    </div>
    <div>
        Footer
    </div>
</body>
</html>