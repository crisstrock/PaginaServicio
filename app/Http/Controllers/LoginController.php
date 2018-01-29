<?php

namespace PaginaServicio\Http\Controllers;

use PaginaServicio\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Session;
use Redirect;

class LoginController extends Controller
{
    public function store(Request $request){

        if(Auth::attempt(['email'=>$request['email'], 'password'=>$request['password']])){
            return Redirect::to('admin');
        }else{
            Session::flash('message-error', 'Tus datos son incorrectos');
        return Redirect::to('/');
        }
        
    }

    public function logout(){
        Auth::logout();
        return Redirect::to('/');
    }
}
