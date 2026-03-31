<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
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
    $atletas = DB::table('atletas')->get();

    return view('inscritos', compact('atletas'));
}
}