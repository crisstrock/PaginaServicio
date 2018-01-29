<?php

namespace PaginaServicio\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;
use Redirect;

class MailController extends Controller
{
	public function show(){
		return view('mail.sendmail');
	}
    
    public function store(Request $request){
    	Mail::send('mail.contact', $request->all(), function($msj){
    		$msj->subject('Correo de contacto');
    		$msj->to('harristrock1195@gmail.com');
    	});

    	Session::flash('message','Mensaje enviado correctamente');
    	return Redirect::to('/mail/show');
    }
}
