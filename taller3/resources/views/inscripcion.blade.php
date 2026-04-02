@extends('layouts.app')

@section('contenido')


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container my-5">

    
    <div class="text-center mb-5">
        <h1 class="fw-bold text-primary">Formulario de Inscripción</h1>
        <p class="text-muted">Completa la información para participar en la carrera</p>
    </div>

    
    @if(session('success'))
        <div class="alert alert-success shadow">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger shadow">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    
    <div class="row justify-content-center">
        <div class="col-md-10">

            <div class="card shadow-lg border-0 rounded-4">

               
                <div class="card-header text-white fw-bold"
                     style="background: linear-gradient(135deg,#2f80ed,#56ccf2);">
                    Datos del participante
                </div>

                <div class="card-body p-4">

                    <form method="POST" action="{{ route('guardar.atleta') }}">
                        @csrf

                        <div class="row g-3">

                            <!-- Nombres -->
                            <div class="col-md-6">
                                <label class="form-label">Nombres</label>
                                <input type="text" name="nombres" class="form-control" value="{{ old('nombres') }}">
                            </div>

                            <!-- Apellidos -->
                            <div class="col-md-6">
                                <label class="form-label">Apellidos</label>
                                <input type="text" name="apellidos" class="form-control" value="{{ old('apellidos') }}">
                            </div>

                            <!-- Edad -->
                            <div class="col-md-4">
                                <label class="form-label">Edad</label>
                                <input type="number" name="edad" class="form-control">
                            </div>

                            <!-- Documento -->
                            <div class="col-md-8">
                                <label class="form-label">Documento</label>
                                <input type="text" name="documento" class="form-control">
                            </div>

                            <!-- Correo -->
                            <div class="col-md-6">
                                <label class="form-label">Correo electrónico</label>
                                <input type="email" name="correo" class="form-control" value="{{ old('correo') }}">
                            </div>

                            <!-- Teléfono -->
                            <div class="col-md-6">
                                <label class="form-label">Teléfono</label>
                                <input type="text" name="telefono" class="form-control">
                            </div>

                            <!-- Género -->
                            <div class="col-md-6">
                                <label class="form-label">Género</label>
                                <select name="genero" class="form-select">
                                    <option>Masculino</option>
                                    <option>Femenino</option>
                                    <option>Prefiero no decirlo</option>
                                </select>
                            </div>

                            <!-- Ciudad -->
                            <div class="col-md-6">
                                <label class="form-label">Ciudad</label>
                                <input type="text" name="ciudad" class="form-control">
                            </div>

                            <!-- Categoría -->
                            <div class="col-md-6">
                                <label class="form-label">Categoría</label>
                                <select name="categoria" class="form-select">
                                    <option>Infantil</option>
                                    <option>Juvenil</option>
                                    <option>Adulto</option>
                                    <option>Master</option>
                                </select>
                            </div>

                            <!-- Experiencia -->
                            <div class="col-md-6">
                                <label class="form-label">Experiencia</label>
                                <select name="experiencia" class="form-select">
                                    <option>Sí</option>
                                    <option>No</option>
                                </select>
                            </div>

                        </div>

                        
                        <div class="text-end mt-4">
                            <button type="submit" class="btn btn-primary px-5 fw-bold shadow">
                                Enviar inscripción
                            </button>
                        </div>

                    </form>

                </div>

            </div>

        </div>
    </div>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

@endsection