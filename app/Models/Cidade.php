<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    
  
    protected $table = 'cidade';

    protected $fillable = [
	    'cidade_id',
	    'estado_id',
	    'nome'
	];

    public static function createCidade(Cidade $cidade){
    	return $cidade->save();
    }
    
    public static function updateCidade(Cidade $cidade){
    	return $cidade->update();
    }

    public static function loadCidadeById($id){
        return Cidade::find($id)->first();
    }

    public static function deleteCidade(Cidade $cidade){
        $cidade = self::loadCidadeoById($cidade);
    	return $cidade->delete();
    }

    public $timestamps = false;
}
