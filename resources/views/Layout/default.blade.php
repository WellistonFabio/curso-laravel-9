<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css'])
    <title>@yield('title', 'Curso de Laravel-9')</title>
</head>
<body style='background-image: url("{{Vite::asset('resources/img/fundo-login5.png')}}")'>
@yield('header')
@yield('content')
@yield('footer')

</body>
</html>
