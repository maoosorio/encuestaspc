<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use DB;

class TblAsignacionEncPregModel extends Model
{
    use SoftDeletes;

    protected $table = 'tbl_asignacion_enc_preg';
    protected $primaryKey = 'id_asignacion';
    protected $keyType = 'string';
    public $incrementing = 'false';

    protected $fillable = ['id_asignacion', 'id_encuesta', 'id_pregunta', 'crea_usuario', 'mod_usuario'];
}
