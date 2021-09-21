<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
#Modelos
use App\Models\TblAjustesModel;
use App\Models\TblListadoSeleccionModel;
#Request
use App\Http\Requests\AjusteRequest;
#Facades
use Cart;
use Session;

class AjustesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function inicio()
    {
        $titulo = "Ajustes";
        $listaAjustes = TblAjustesModel::listaAjustes();
        return view('ajustes.index', compact('titulo', 'listaAjustes'));
    }
    
    public function agregarAjuste()
    {
        $titulo = "Agregar Ajuste";
        $listaCategorias = TblListadoSeleccionModel::listaAjustes();
        return view('ajustes.nuevaAjuste', compact('titulo','listaCategorias'));
    }

    public function guardarAjuste(AjusteRequest $request)
    {
        $post = $request->all();
        TblAjustesModel::create([
            'id_listSelDetalle' => (string) Str::uuid(),
            'id_listadoSeleccion' => $post['listadoSeleccion'],
            'descripcion' => $post['descripcion'],
            'crea_usuario' => Auth::user()->id_encuestador
        ]);
        return redirect('ajustes')->with('success', 'La información se ha guardado correctamente');
    }

    public function editarAjuste($idAjuste)
    {
        $titulo = "Editar Ajuste";
        $listaCategorias = TblListadoSeleccionModel::listaAjustes();
        $datos = TblAjustesModel::where('id_listSelDetalle', $idAjuste)->first();
        return view('ajustes.editarAjuste', compact('titulo', 'datos','listaCategorias'));
    }

    public function modificarAjuste(AjusteRequest $request)
    {
        $post = $request->all();
        $datos = TblAjustesModel::where('id_listSelDetalle', $post['id_listSelDetalle'])->first();
        $datos->id_listadoSeleccion = $post['id_listadoSeleccion'];
        $datos->descripcion = $post['descripcion'];
        $datos->mod_usuario = Auth::user()->id_encuestador;
        $datos->save();
        return redirect('ajustes')->with('info', 'La información se ha actualizado correctamente');
    }

    public function borrarAjuste(Request $request)
    {
        $post = $request->all();
        $datos = TblAjustesModel::where('id_listSelDetalle', $post['id_listSelDetalle'])->first();
        $datos->mod_usuario = Auth::user()->id_encuestador;
        $datos->save();
        $datos->delete();
        return redirect('ajustes')->with('warning', 'La información ha sido eliminada correctamente');
    }
    
}
