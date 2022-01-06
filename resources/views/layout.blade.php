<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <title>@yield('title','Laravel')</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="../css/prueba.css">
</head>
<style>
    .active a {
        color:red;
        text-decoration:none;
    }
</style>
<body>
    <h1 id="prueba">Prueba de estilos</h1>
   @include('partials/nav')
   @include('partials.session-status')
    @yield('content')
</body>
</html>