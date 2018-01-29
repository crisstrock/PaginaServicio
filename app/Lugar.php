<?php

namespace PaginaServicio;

use Illuminate\Database\Eloquent\Model;
use DB;

class Lugar extends Model
{
    protected $table = "lugars";

    protected $fillable = ['nombre'];

    public static function Lugar(){
    	return DB::table('lugars')
    		->select('lugars.nombre')
    		->get();
    }
}
