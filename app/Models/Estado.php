<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;

    protected $table = 'estado';
    public $timestamps = false;
    protected $fillable = [
	    'estado_id',
	    'nome',
        'sigla'
	];

    public static function createEstado(Estado $estado){
    	return $estado->save();
    }
    
    public static function updateEstado(Estado $estado){
    	return $estado->update();
    }

    public static function loadEstadoById($id){
        return Estado::find($id)->first();
    }

    public static function deleteEstado(Estado $estado){
        $estado = self::loadEstadoById($estado);
    	return $estado->delete();
    }
}
