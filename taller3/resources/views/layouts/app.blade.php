<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Atletismo App</title>

    <style>
        body{
            font-family: Arial;
            margin:0;
        }

        nav{
            background:#222;
            padding:15px;
        }

        nav a{
            color:white;
            margin-right:20px;
            text-decoration:none;
            font-weight:bold;
        }

        nav a:hover{
            color:orange;
        }

        .container{
            padding:20px;
        }
    </style>

</head>
<body>

<nav>
    <a href="{{ url('/') }}">Inicio</a>
    <a href="{{ url('/inscripcion') }}">Inscripción</a>
    <a href="{{ url('/inscritos') }}">Inscritos</a>
</nav>

<div class="container">

    @yield('contenido')

</div>

</body>
</html>