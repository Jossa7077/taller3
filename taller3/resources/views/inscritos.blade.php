@extends('layouts.app')

@section('contenido')

<!-- Bootstrap CDN (si no está en layout) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container my-5">

    <!-- HEADER -->
    <div class="text-center mb-5">
        <h1 class="fw-bold text-primary">Lista de Inscritos</h1>
        <p class="text-muted">Participantes registrados en la carrera</p>
    </div>

    @if($atletas->isEmpty())

        <div class="alert alert-warning text-center shadow">
            No hay inscritos todavía.
        </div>

    @else

        <div class="card shadow-lg border-0 rounded-4">

            <!-- CABECERA -->
            <div class="card-header text-white fw-bold"
                 style="background: linear-gradient(135deg,#2f80ed,#56ccf2);">
                Participantes registrados
            </div>

            <div class="card-body">

                <div class="table-responsive">

                    <table class="table table-striped table-hover align-middle">

                        <thead class="table-dark text-center">
                            <tr>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Edad</th>
                                <th>Documento</th>
                                <th>Correo</th>
                                <th>Teléfono</th>
                                <th>Ciudad</th>
                                <th>Categoría</th>
                                <th>Experiencia</th>
                                <th>Género</th>
                            </tr>
                        </thead>

                        <tbody class="text-center">

                            @foreach($atletas as $atleta)

                            <tr>
                                <td>{{ $atleta->nombres }}</td>
                                <td>{{ $atleta->apellidos }}</td>
                                <td>{{ $atleta->edad }}</td>
                                <td>{{ $atleta->documento }}</td>
                                <td>{{ $atleta->correo }}</td>
                                <td>{{ $atleta->telefono }}</td>
                                <td>{{ $atleta->ciudad }}</td>

                                <!-- Categoría -->
                                <td>
                                    <span class="badge bg-primary">
                                        {{ $atleta->categoria }}
                                    </span>
                                </td>

                                <!-- Experiencia -->
                                <td>
                                    @if($atleta->experiencia == 'Sí')
                                        <span class="badge bg-success">Con experiencia</span>
                                    @else
                                        <span class="badge bg-secondary">Sin experiencia</span>
                                    @endif
                                </td>

                                <!-- Género con colores -->
                                <td>
                                    @if($atleta->genero == 'Femenino')
                                        <span class="badge" style="background-color:#ff4da6;">
                                            Femenino
                                        </span>
                                    @elseif($atleta->genero == 'Masculino')
                                        <span class="badge bg-primary">
                                            Masculino
                                        </span>
                                    @else
                                        <span class="badge bg-secondary">
                                            {{ $atleta->genero }}
                                        </span>
                                    @endif
                                </td>

                            </tr>

                            @endforeach

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    @endif

</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

@endsection