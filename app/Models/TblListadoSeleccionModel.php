<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
// use DB;
use Illuminate\Support\Facades\DB;

class TblListadoSeleccionModel extends Model
{
    use SoftDeletes;

    protected $table = 'tbl_listadoseleccion';
    protected $primaryKey = 'id_listadoSeleccion';
    protected $keyType = 'string';
    public $incrementing = 'false';

    protected $fillable = ['id_listadoSeleccion', 'descripcion', 'crea_usuario', 'mod_usuario'];

    public static function listaAjustes()
    {
        $consulta = DB::select('SELECT
        d.id_listadoSeleccion,
        d.descripcion,
        d.created_at,
        d.updated_at,
        u.username AS crea_usuario,
        s.username AS mod_usuario 
    FROM
        tbl_listadoseleccion d
        LEFT JOIN users u ON d.crea_usuario = u.id_encuestador
        LEFT JOIN users s ON d.mod_usuario = s.id_encuestador 
    ORDER BY
        d.descripcion');
        return $consulta;
    }
}
