@extends('layouts.app')

@section('contenido')


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container my-5">

    
    <div class="position-relative rounded-4 overflow-hidden shadow-lg mb-5">

        <img src="https://static.vecteezy.com/system/resources/thumbnails/006/992/886/small/silhouette-man-running-in-the-evening-free-photo.jpg"
             class="w-100"
             style="height:420px; object-fit:cover;">

        <div class="position-absolute top-0 start-0 w-100 h-100"
             style="background:linear-gradient(135deg,#0f2027cc,#203a43cc,#2c5364cc);">
        </div>

        <div class="position-absolute top-50 start-50 translate-middle text-center text-white px-4">

            <h1 class="fw-bold display-4">
                Bienvenido al Club de Atletismo <h1 class="fw-bold display-4" style="color:#56ccf2;">-1000 de Aura</h1>
            </h1>

            <p class="lead mt-3">
                El atletismo es disciplina, esfuerzo y superación personal.
            </p>

        </div>

    </div>

    
    <div class="row align-items-center g-5 mb-5">

        
        <div class="col-md-6">

            <div class="card border-0 shadow-lg rounded-4">

                <div class="card-body p-4">

                    <h2 class="fw-bold text-primary text-center mb-4">
                        ¿Por qué practicar atletismo?
                    </h2>

                    <ul class="list-group list-group-flush text-center fs-5">

                        <li class="list-group-item">Mejora tu salud física</li>
                        <li class="list-group-item">Aumenta tu resistencia</li>
                        <li class="list-group-item">Reduce el estrés</li>
                        <li class="list-group-item">Fortalece tu disciplina</li>
                        <li class="list-group-item">Haz nuevos amigos</li>

                    </ul>

                    <p class="mt-4 text-muted text-center">
                        Nuestro programa está diseñado para principiantes y atletas con experiencia.
                        No importa tu nivel, puedes empezar hoy.
                    </p>

                </div>

            </div>

        </div>

        
        <div class="col-md-6 position-relative">

            <div class="position-absolute top-0 start-0 w-100 h-100 rounded-4"
                 style="background:linear-gradient(45deg,#56ccf2,#2f80ed); transform:rotate(4deg); z-index:0;">
            </div>

            <img src="https://cdn.pixabay.com/photo/2023/10/04/14/15/man-8293794_1280.jpg"
                 class="img-fluid rounded-4 shadow-lg position-relative"
                 style="z-index:1;">

        </div>

    </div>

    
    <div class="mb-5">

        <div class="card border-0 shadow-lg rounded-4 text-center">

            <div class="card-body p-5"
                 style="background:linear-gradient(135deg,#f5f7fa,#e4ecf3);">

                <h3 class="fw-bold mb-3">
                    Entrenamiento en acción
                </h3>

                <p class="text-muted mb-4">
                    La constancia y el esfuerzo son la base del rendimiento deportivo.
                </p>

                
                <iframe width="700" height="400" class="rounded shadow"
                    src="https://www.youtube.com/embed/Pg7Jw787MgE"
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>

            </div>

        </div>

    </div>

    
    <div class="text-center">

        <a href="{{ url('/inscripcion') }}" class="btn btn-primary btn-lg px-5 shadow fw-bold">
            Inscribirme ahora
        </a>

    </div>

    <div style="text-align:center; margin-top:30px; color:#666; font-size:14px;">
        Proyecto académico desarrollado por <strong> Sebastian Alexander Jimenez Santander - Jaider Santiago Jossa Ramos </strong>
    </div>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

@endsection