<?php

namespace PaginaServicio\Http\Controllers;

use Illuminate\Http\Request;
use PaginaServicio\Item;
use PaginaServicio\Lugar;
use DB;
use Session;
use Redirect;

class MobiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::MobiAll();
        return view('mobiliario.index',compact('items'));       
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clasi = Item::getClasificacion();
        return view('mobiliario.create', compact('clasi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = Item::create($request->all());
        
        Session::flash('message', 'Item creado correctamente');
        //return redirect('exist/create')->with(compact('properties'));
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
        return view('mobiliario.show',compact('mobis'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $items = Item::find($id);
        return view('mobiliario.edit', ['items'=>$items]);
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
        $item = Item::find($id);
        $item->fill($request->all());
        $items->save();

        Session::flash('message','Item editada correctamente');
        return Redirect::to('/item');
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
