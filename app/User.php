<?php

namespace PaginaServicio;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon\Carbon;
use DB;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'apellido', 'telefono', 'horas_cubrir', 'tipo_usuario','email','password', 'path',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $dates = ['deleted_at'];
    
    public function setPasswordAttribute($valor){

        if(!empty($valor)){
            /*Hash es para poder encriptar la contraseña, en lugar de hacerlo con el bcrypt*/
            $this->attributes['password'] = \Hash::make($valor);
        }
    }

    public static function getTipoUsuario()
    {
        $type = DB::select( DB::raw("SHOW COLUMNS FROM users WHERE Field = 'tipo_usuario'") )[0]->Type;
        preg_match('/^enum\((.*)\)$/', $type, $matches);
        $enum = array();
            foreach( explode(',', $matches[1]) as $value )
            {
                $v = trim( $value, "'" );
                $enum = array_add($enum, $v, $v);
            }
        return $enum;
    }

    public function setPathAttribute($path){

        if(!empty($path)){
            $this->attributes['path'] = Carbon::now()->second.$path->getClientOriginalName();
            $name = Carbon::now()->second.$path->getClientOriginalName();
            \Storage::disk('local')->put($name, \File::get($path));
        }

    }
    
}
