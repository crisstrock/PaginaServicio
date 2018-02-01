<?php

namespace PaginaServicio;

use Illuminate\Database\Eloquent\Model;

class Existencias extends Model
{
    protected $table = "item_lugar";

	protected $fillable = ['lugar_id','item_id'];

    public static function addExistencia($item, $lugar){
        $dataExistencias = array(
                $lugar => 'lugar_id',
                $item => 'item_id',
            );
        $addExistencias = new Existencias($dataExistencias);
        $addExistencias->save();
    }
    
}
