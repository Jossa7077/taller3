@extends('layouts.app')

@section('contenido')

<h1>Bienvenido al Club de Atletismo</h1>

<p>
El atletismo no es solo correr… es disciplina, esfuerzo y superación personal.
Únete a nuestro equipo y descubre hasta dónde puedes llegar.
</p>

<h2>¿Por qué practicar atletismo?</h2>

<ul>
    <li>Mejora tu salud física</li>
    <li>Aumenta tu resistencia</li>
    <li>Reduce el estrés</li>
    <li>Fortalece tu disciplina</li>
    <li>Haz nuevos amigos</li>
</ul>

<p>
Nuestro programa está diseñado para principiantes y atletas con experiencia.
No importa tu nivel, ¡puedes empezar hoy!
</p>

<a href="{{ url('/inscripcion') }}">
    <button>Inscribirme ahora</button>
</a>

@endsection