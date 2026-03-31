<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function inicio()
    {
        return view('inicio');
    }

    public function inscripcion()
    {
        return view('inscripcion');
    }

    public function inscritos()
    {
        return view('inscritos');
    }
}