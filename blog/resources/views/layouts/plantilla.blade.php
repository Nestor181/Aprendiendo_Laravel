<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>@yield('title')</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"> <!--Se agrega esta linea para mostrar la numeracion de las paginas de bonita forma-->
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
<style>
    .active{
        color: rgb(231, 15, 187);
        font-weight: bold;
    }

    .error{
        color: brown;
        font-weight: bold;
    }
</style>

</head>
<body>

   @include('layouts.partials.header')
    @yield('content')
  
</body>
</html>