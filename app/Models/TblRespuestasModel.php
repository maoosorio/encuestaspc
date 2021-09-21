<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use DB;

class TblRespuestasModel extends Model
{
    use SoftDeletes;

    protected $table = 'tbl_respuestas';
    protected $primaryKey = 'id_respuesta';
    protected $keyType = 'string';
    public $incrementing = 'false';

    protected $fillable = ['id_respuesta', 'id_pregunta', 'descripcion', 'valor', 'crea_usuario', 'mod_usuario'];
}
