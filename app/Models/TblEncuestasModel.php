<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use DB;

class TblEncuestasModel extends Model
{
    use SoftDeletes;

    protected $table = 'tbl_encuestas';
    protected $primaryKey = 'id_encuesta';
    protected $keyType = 'string';
    public $incrementing = 'false';

    protected $fillable = ['id_encuesta', 'descripcion', 'crea_usuario', 'mod_usuario'];

    public static function listaEncuestas()
    {
        $consulta = DB::select('SELECT
                                    e.id_encuesta
                                    , e.descripcion
                                    , e.created_at
                                    , e.updated_at
                                    , c.username AS crea_usuario
                                    , m.username AS mod_usuario
                                FROM tbl_encuestas e
                                LEFT JOIN users c ON e.crea_usuario = c.id_encuestador
                                LEFT JOIN users m ON e.mod_usuario = m.id_encuestador
                                WHERE e.deleted_at IS NULL');
        return $consulta;
    }
}
