<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
#Modelos
use App\Models\TblPreguntasModel;
use App\Models\TblRespuestasModel;
use App\Models\TblAsignacionEncPregModel;
use App\Models\TblListadoSelDetalleModel;
#Request
use App\Http\Requests\PreguntasRequest;
use App\Http\Requests\RespuestaRequest;
#Facades
use Cart;
use Session;

class PreguntasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function inicio()
    {
        $titulo = "Banco de Preguntas";
        $listaPreguntas = TblPreguntasModel::listaPreguntas();
        return view('preguntas.inicioPreguntas', compact('titulo', 'listaPreguntas'));
    }

    public function agregarPregunta()
    {
        $titulo = "Registro de Pregunta";
        $listaCategorias = TblListadoSelDetalleModel::CategoriaPreguntas();
        $listaTiposResp = TblListadoSelDetalleModel::TiposRespuesta();
        return view('preguntas.nuevaPregunta', compact('titulo', 'listaCategorias', 'listaTiposResp'));
    }

    public function agregarRespuesta(RespuestaRequest $request)
    {
        $post = $request->all();
        $idRespuesta = (string) Str::uuid();
        Cart::add($idRespuesta, $post['texto_respuesta'], 0, $post['valor_respuesta'], []);
        return redirect('agregarPregunta')->with('success', 'Se agregó la respuesta correctamente');
    }

    public function quitarRespuesta(Request $request)
    {
        $post = $request->all();
        Cart::remove($post['id_respuesta']);
        return redirect('agregarPregunta')->with('info', 'Se eliminó la respuesta correctamente');
    }

    public function guardarPregunta(PreguntasRequest $request)
    {
        $post = $request->all();
        if(Cart::getContent()->count() != 0)
        {
            $idPregunta = (string) Str::uuid();
            $pregunta = new TblPreguntasModel();
            $pregunta->id_pregunta = $idPregunta; //lo pongo aquí porque al guardar se pierde
            $pregunta->id_categoriaPregunta = $post['categoria_pregunta'];
            $pregunta->id_tipoRespuesta = $post['tipos_respuesta'];
            $pregunta->descripcion = $post['texto_pregunta'];
            $pregunta->crea_usuario = Auth::user()->id_encuestador;
            $pregunta->save();

            foreach(Cart::getContent() as $fila)
            {
                TblRespuestasModel::create([
                    'id_respuesta' => $fila->id,
                    'id_pregunta' => $idPregunta,
                    'descripcion' => $fila->name,
                    'valor' => $fila->quantity,
                    'crea_usuario' => Auth::user()->id_encuestador
                ]);
            }
            Cart::clear();
            return redirect('preguntas')->with('success', 'La pregunta fue agregada correctamente');
        }
        else
        {
            return redirect('agregarPregunta')->with('error', 'Debes agregar al menos una respuesta');
        }
    }

    public function editarPregunta($idPregunta)
    {
        //Cart::clear();
        return Cart::getContent();
    }

    public function modificarPregunta()
    {

    }

    public function borrarPregunta()
    {

    }
}
