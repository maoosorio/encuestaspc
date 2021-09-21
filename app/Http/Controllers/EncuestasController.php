<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
# Modelos
use App\Models\TblEncuestasModel;
# Requests
use App\Http\Requests\EncuestaRequest;

class EncuestasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function inicio()
    {
        $titulo = "Encuestas";
        $listaEncuestas = TblEncuestasModel::listaEncuestas();
        return view('encuestas.index', compact('listaEncuestas', 'titulo'));
    }

    public function agregarEncuesta()
    {
        $titulo = "Crear Título de Encuesta";
        return view('encuestas.nuevaEncuesta', compact('titulo'));
    }

    public function guardarEncuesta(EncuestaRequest $request)
    {
        $post = $request->all();
        TblEncuestasModel::create([
            'id_encuesta' => (string) Str::uuid(),
            'descripcion' => $post['nombre_encuesta'],
            'crea_usuario' => Auth::user()->id_encuestador
        ]);
        return redirect('encuestas')->with('success', 'La información se ha guardado correctamente');
    }

    public function editarEncuesta($idEncuesta)
    {
        $titulo = "Editar Título de Encuesta";
        $datos = TblEncuestasModel::where('id_encuesta', $idEncuesta)->first();
        return view('encuestas.editarEncuesta', compact('titulo', 'datos'));
    }

    public function modificarEncuesta(EncuestaRequest $request)
    {
        $post = $request->all();
        $datos = TblEncuestasModel::where('id_encuesta', $post['id_encuesta'])->first();
        $datos->descripcion = $post['nombre_encuesta'];
        $datos->mod_usuario = Auth::user()->id_encuestador;
        $datos->save();
        return redirect('encuestas')->with('info', 'La información se ha actualizado correctamente');
    }

    public function borrarEncuesta(Request $request)
    {
        $post = $request->all();
        $datos = TblEncuestasModel::where('id_encuesta', $post['id_encuesta'])->first();
        $datos->mod_usuario = Auth::user()->id_encuestador;
        $datos->save();
        $datos->delete();
        return redirect('encuestas')->with('warning', 'La información ha sido eliminada correctamente');
    }
}
