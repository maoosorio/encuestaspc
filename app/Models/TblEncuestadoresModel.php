<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use DB;

class TblEncuestadoresModel extends Model
{
    use SoftDeletes;

    protected $table = 'tbl_encuestadores';
    protected $primaryKey = 'id_encuestador';
    protected $keyType = 'string';
    public $incrementing = 'false';

    protected $fillable = ['id_encuestador', 'nombre','paterno', 'materno', 'crea_usuario', 'mod_usuario'];

    public static function listaEncuestadores()
    {
        $consulta = DB::select('SELECT
                                    e.id_encuestador
                                    , e.nombre
                                    , e.paterno
                                    , e.materno
                                    , e.created_at
                                    , e.updated_at
                                    , c.username AS crea_usuario
                                    , m.username AS mod_usuario
                                FROM tbl_encuestadores e
                                LEFT JOIN users c ON e.crea_usuario = c.id_encuestador
                                LEFT JOIN users m ON e.mod_usuario = m.id_encuestador
                                WHERE e.deleted_at IS NULL');
        return $consulta;
    }
}
