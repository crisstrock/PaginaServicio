<?php

namespace PaginaServicio\Http\Controllers;



use PaginaServicio\Http\Requests\UserCreateRequest;
use PaginaServicio\Http\Requests\UserUpdateRequest;
use PaginaServicio\User;
use Session;
use Redirect;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
   
    public function __construct(){
        //$this->middleware('auth');
        //$this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        /*El trashed es para que me muestre lo que fueron eliminados
        $users = User::onlyTrashed()->paginate(3);*/
        $users = User::paginate(2);
        if($request->ajax()){
            return response()->json(view('usuario.users', compact('users'))->render());
        }
        return view('usuario.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        User::create($request->all());
            /*[
            'nombre' => $request['nombre'],
            'apellido' => $request['apellido'],
            'telefono' => $request['telefono'],
            'horas_cubrir' => $request['horas_a_cubrir'],
            'tipo_usuario' => $request['tipo'],
            'email' => $request['email'],
            'numcontrol' => $request['numcontrol'],
            'password' => bcrypt($request['password']),
            'path' => file($request['path']),
            ]
        );*/

       Session::flash('message', 'Usuario creado correctamente');
        return Redirect::to('/usuario');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('usuario.perfil');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('usuario.edit', ['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->fill($request->all());
        $user->save();

        Session::flash('message', 'Usuario actualizado correctamente');
        return Redirect::to('/usuario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        Session::flash('message', 'Usuario eliminado correctamente');
        return Redirect::to('/usuario');
    }

}
