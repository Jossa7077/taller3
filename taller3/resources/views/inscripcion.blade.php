@extends('layouts.app')

@section('contenido')

<h1>Formulario de Inscripción - Club de Atletismo</h1>

@if(session('success'))
    <p style="color:green;">
        {{ session('success') }}
    </p>
@endif
@if ($errors->any())
    <div style="color:red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="POST" action="{{ route('guardar.inscripcion') }}">

    @csrf

    <label>Nombres:</label><br>
    <input type="text" name="nombres"><br><br>

    <label>Apellidos:</label><br>
    <input type="text" name="apellidos"><br><br>

    <label>Edad:</label><br>
    <input type="number" name="edad"><br><br>

    <label>Documento de identidad:</label><br>
    <input type="text" name="documento"><br><br>

    <label>Correo electrónico:</label><br>
    <input type="email" name="correo"><br><br>

    <label>Teléfono:</label><br>
    <input type="text" name="telefono"><br><br>

    <label>Género:</label><br>
    <select name="genero">
        <option>Masculino</option>
        <option>Femenino</option>
        <option>Prefiero no decirlo</option>
    </select>
    <br><br>

    <label>Ciudad:</label><br>
    <input type="text" name="ciudad"><br><br>

    <label>Categoría:</label><br>
    <select name="categoria">
        <option>Infantil</option>
        <option>Juvenil</option>
        <option>Adulto</option>
        <option>Master</option>
    </select>
    <br><br>

    <label>¿Tiene experiencia en atletismo?</label><br>
    <select name="experiencia">
        <option>Sí</option>
        <option>No</option>
    </select>
    <br><br>

    <button type="submit">Enviar inscripción</button>

</form>

@endsection