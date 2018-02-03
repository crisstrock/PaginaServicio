<?php

namespace PaginaServicio\Http\Controllers;

use Illuminate\Http\Request;
use PaginaServicio\Item;
use PaginaServicio\Pc;
use PaginaServicio\Lugar;
use PaginaServicio\Existencias;
use DB;
use Session;
use Redirect;

class ExisteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lugares = Lugar::Lugar();
        return view('existencias.index',compact('lugares'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$lugars = Lugar::pluck('nombre','id');
        //return $id;
        //return view('existencias.create',compact('lugars'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Existencias::create($request->all());
    
        Session::flash('message', 'Existencia creada correctamente');
        return Redirect::to('/mobi');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mobis = Item::MobiIn($id);
        $pcs = Pc::getPcs();
        //return $pcs;
        return view('mobiliario.show_pc',compact('mobis','pcs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item_id = Item::find($id);
        $lugars = Lugar::pluck('nombre','id');
        return view('existencias.create',compact('item_id','lugars'));
        
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
