<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PqrsController extends Controller
{
    public function guardarInscripcion(Request $request)
    {
        // Validación del formulario
        $request->validate([
            'nombres' => 'required|string|max:100',
            'apellidos' => 'required|string|max:100',
            'edad' => 'required|integer|min:5|max:80',
            'documento' => 'required|string|max:20',
            'correo' => 'required|email|max:100',
            'telefono' => 'required|string|max:15',
            'genero' => 'required|string',
            'ciudad' => 'required|string|max:100',
            'categoria' => 'required|string',
            'experiencia' => 'required|string'
        ]);

        // Si todo sale bien
        return redirect('/inscripcion')->with('success', 'Inscripción enviada correctamente');
    }
}