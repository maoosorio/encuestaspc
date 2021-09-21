<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
# Modelos
use App\Models\TblEncuestadoresModel;
# Requests
use App\Http\Requests\EncuestadorRequest;

class EncuestadoresController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function inicio()
    {
        $titulo = "Encuestadores";
        $listaEncuestadores = TblEncuestadoresModel::listaEncuestadores();
        return view('encuestadores.index', compact('listaEncuestadores', 'titulo'));
    }

    public function agregarEncuestador()
    {
        $titulo = "Agregar Encuestador";
        return view('encuestadores.nuevaEncuestador', compact('titulo'));
    }

    public function guardarEncuestador(EncuestadorRequest $request)
    {
        $post = $request->all();
        TblEncuestadoresModel::create([
            'id_encuestador' => (string) Str::uuid(),
            'nombre' => $post['nombre'],
            'paterno' => $post['paterno'],
            'materno' => $post['materno'],
            'crea_usuario' => Auth::user()->id_encuestador
        ]);
        return redirect('encuestadores')->with('success', 'La información se ha guardado correctamente');
    }

    public function editarEncuestador($idEncuestador)
    {
        $titulo = "Editar Encuestador";
        $datos = TblEncuestadoresModel::where('id_encuestador', $idEncuestador)->first();
        return view('encuestadores.editarEncuestador', compact('titulo', 'datos'));
    }

    public function modificarEncuestador(EncuestadorRequest $request)
    {
        $post = $request->all();
        $datos = TblEncuestadoresModel::where('id_encuestador', $post['id_encuestador'])->first();
        $datos->nombre = $post['nombre'];
        $datos->paterno = $post['paterno'];
        $datos->materno = $post['materno'];
        $datos->mod_usuario = Auth::user()->id_encuestador;
        $datos->save();
        return redirect('encuestadores')->with('info', 'La información se ha actualizado correctamente');
    }

    public function borrarEncuestador(Request $request)
    {
        $post = $request->all();
        $datos = TblEncuestadoresModel::where('id_encuestador', $post['id_encuestador'])->first();
        $datos->mod_usuario = Auth::user()->id_encuestador;
        $datos->save();
        $datos->delete();
        return redirect('encuestadores')->with('warning', 'La información ha sido eliminada correctamente');
    }
}
