<?php

namespace PaginaServicio;

use Illuminate\Database\Eloquent\Model;

class Pc extends Model
{
    protected $table = "pcs";

    protected $fillable = ['num_maquina','funciona','sistema_operativo','funciona_monitor','num_serie_cpu','path','lugar_id'];

    public function setPathAttribute($path){

    	if(!empty($path)){
    		$this->attributes['path'] = Carbon::now()->second.$path->getClientOriginalName();
    		$name = Carbon::now()->second.$path->getClientOriginalName();
    		\Storage::disk('local')->put($name, \File::get($path));
    	}

    }

    public static function Computadoras(){
    	return DB::table('items')
    	->join('lugars','lugars.id','=','items.lugar_id')
    	->select('items.*','lugars.nombre')
    	->get();
    }
}
