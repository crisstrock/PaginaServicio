<?php

namespace PaginaServicio;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use DB;

class Item extends Model
{
    protected $table = "items";

    protected $fillable = ['clasificacion','descripcion','modelo','estado','marca','path'];

    public function setPathAttribute($path){

    	if(!empty($path)){
    		$this->attributes['path'] = Carbon::now()->second.$path->getClientOriginalName();
    		$name = Carbon::now()->second.$path->getClientOriginalName();
    		\Storage::disk('local')->put($name, \File::get($path));
    	}

    }


    public static function MobiAll(){
    	return DB::table('items')
       // ->where('id',2)
        ->select('items.*')
        ->get();
    }

    public static function MobiIn($sala){

        $query = "select * from items where id in (select item_id from existencias where lugar_id in ( select id from lugars where nombre = '$sala'));";
        return DB::select($query);
    }

    public static function lastIdItem(){
        $sql = 'select id from items where id = (select max(id) from items);';
        return DB::select($sql);
    }

}
