<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('titulo','Laravel') {{-- Indicamos que aqui ponemos un contenido --}} {{-- El segundo parametro indica el valor que tomara por defecto en caso de no indicarsele uno --}}
    </title>
    
    @stack('taildwindcss') {{-- Indicamos que aqui pondremos un contenido --}}
</head>

<body>
    {{-- Indicamos que aqui pondremos un contenido --}}
    @yield('content')

</body>

</html>
