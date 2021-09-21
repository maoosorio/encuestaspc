<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use DB;

class TblListadoSelDetalleModel extends Model
{
    use SoftDeletes;

    protected $table = 'tbl_listadoseldetalle';
    protected $primaryKey = 'id_listSelDetalle';
    protected $keyType = 'string';
    public $incrementing = 'false';

    protected $fillable = ['id_listSelDetalle', 'id_listadoSeleccion', 'descripcion', 'crea_usuario', 'mod_usuario'];

    public static function getListadoSelDetalle($id_listadoseleccion)
    {
        $consulta = DB::select("SELECT
                                    d.id_listSelDetalle
                                    , d.descripcion
                                    , d.created_at
                                    , d.updated_at
                                    , u.username AS crea_usuario
                                    , s.username AS mod_usuario
                                FROM tbl_listadoseldetalle d
                                LEFT JOIN users u ON d.crea_usuario = u.id_encuestador
                                LEFT JOIN users s ON d.mod_usuario = s.id_encuestador
                                WHERE d.id_listadoSeleccion = '$id_listadoseleccion'
                                ORDER BY d.descripcion");
        return $consulta;
    }

    public static function CategoriaPreguntas()
    {
        return self::getListadoSelDetalle('003e57ae-1370-11ec-9a5e-2cfda1234877');
    }

    public static function EstatusEncuesta()
    {
        return self::getListadoSelDetalle('43b19b8e-136e-11ec-9a5e-2cfda1234877');
    }

    public static function TiposRespuesta()
    {
        return self::getListadoSelDetalle('43b1b1fe-136e-11ec-9a5e-2cfda1234877');
    }

    public static function TiposPoblacion()
    {
        return self::getListadoSelDetalle('43b1b30a-136e-11ec-9a5e-2cfda1234877');
    }

    public static function Modulos()
    {
        return self::getListadoSelDetalle('43b1b377-136e-11ec-9a5e-2cfda1234877');
    }

    public static function Permisos()
    {
        return self::getListadoSelDetalle('43b1b3b9-136e-11ec-9a5e-2cfda1234877');
    }
}
