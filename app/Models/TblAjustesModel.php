<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use DB;

class TblAjustesModel extends Model
{
    use SoftDeletes;

    protected $table = 'tbl_listadoseldetalle';
    protected $primaryKey = 'id_listSelDetalle';
    protected $keyType = 'string';
    public $incrementing = 'false';

    protected $fillable = ['id_listSelDetalle', 'id_listadoSeleccion', 'descripcion', 'crea_usuario', 'mod_usuario'];

    public static function listaAjustes()
    {
        $consulta = DB::select('SELECT
        a.id_listSelDetalle,
        a.id_listadoSeleccion,
        a.descripcion,
        si.descripcion AS ajuste,
        u.username AS crea_usuario,
        s.username AS mod_usuario,
        a.created_at,
        a.updated_at 
    FROM
        tbl_listadoseldetalle a
        JOIN tbl_listadoseleccion si ON a.id_listadoSeleccion = si.id_listadoSeleccion
        LEFT JOIN users u ON a.crea_usuario = u.id_encuestador
        LEFT JOIN users s ON a.mod_usuario = s.id_encuestador 
    WHERE
        a.deleted_at IS NULL');
        return $consulta;
    }
}
