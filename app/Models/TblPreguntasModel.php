<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use DB;

class TblPreguntasModel extends Model
{
    use SoftDeletes;

    protected $table = 'tbl_preguntas';
    protected $primaryKey = 'id_pregunta';
    protected $keyType = 'string';
    public $incrementing = 'false';

    protected $fillable = ['id_pregunta', 'id_categoriaPregunta', 'id_tipoRespuesta', 'descripcion', 'crea_usuario', 'mod_usuario'];

    public static function listaPreguntas()
    {
        $consulta = DB::select('SELECT
                                    p.id_pregunta
                                    , p.descripcion
                                    , a.descripcion AS categoria
                                    , b.descripcion AS tiporesp
                                    , u.username AS crea_usuario
                                    , s.username AS mod_usuario
                                    , p.created_at
                                    , p.updated_at
                                FROM tbl_preguntas p
                                JOIN tbl_listadoseldetalle a ON p.id_categoriaPregunta = a.id_listSelDetalle
                                JOIN tbl_listadoseldetalle b ON p.id_tipoRespuesta = b.id_listSelDetalle
                                LEFT JOIN users u ON p.crea_usuario = u.id_encuestador
                                LEFT JOIN users s ON p.mod_usuario = s.id_encuestador
                                WHERE p.deleted_at IS NULL ');
        return $consulta;
    }
}
