@extends('layouts.app')

@section('contenido')

<h1>Lista de inscritos</h1>

@if($atletas->isEmpty())
    <p>No hay inscritos todavía.</p>
@else

<table border="1">

<tr>
    <th>Nombres</th>
    <th>Apellidos</th>
    <th>Edad</th>
    <th>Documento</th>
    <th>Correo</th>
    <th>Teléfono</th>
    <th>Ciudad</th>
    <th>Categoría</th>
</tr>

@foreach($atletas as $atleta)

<tr>
    <td>{{ $atleta->nombres }}</td>
    <td>{{ $atleta->apellidos }}</td>
    <td>{{ $atleta->edad }}</td>
    <td>{{ $atleta->documento }}</td>
    <td>{{ $atleta->correo }}</td>
    <td>{{ $atleta->telefono }}</td>
    <td>{{ $atleta->ciudad }}</td>
    <td>{{ $atleta->categoria }}</td>
</tr>

@endforeach

</table>

@endif

@endsection