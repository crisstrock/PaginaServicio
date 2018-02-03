<?php

namespace PaginaServicio;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use DB;

class Pc extends Model
{
    protected $table = "pcs";

    protected $primaryKey = 'item_id';

    protected $fillable = ['item_id', 'num_maquina','tiene_camara','tiene_bocinas', 'num_serie_cpu','ram','disco_duro','sistema_operativo','sistema_operativo_activado','cable_vga','tiene_monitor','num_serie_monitor','tiene_teclado','tiene_raton','controlador_red','paq_office_version','paq_office_activado','observaciones'];

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

    public static function getIdPc($id){
        $query = "select * from pcs where item_id = '$id';";
        return DB::select($query);
    }

    public static function getPcs(){
        $query = "select * from pcs;";
        return DB::select($query);
    }

}
