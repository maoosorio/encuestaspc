<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GraficosController extends Controller
{

    public function inicio()
    {
        $titulo = "Gráficos";
        return view('graficos', compact('titulo'));
    }

}
