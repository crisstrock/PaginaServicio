<?php

namespace PaginaServicio\Http\Controllers;

use Illuminate\Http\Request;
use PaginaServicio\Item;
use PaginaServicio\Pc;
use Session;
use Redirect;

class PcController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pcs = Pc::Computadoras();
        return view('pcs.index',compact('pcs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pc::create($request->all());
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
        $item_id = Item::find($id);
        return view('pcs.create',compact('item_id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pcs = Pc::find($id);
        /*$item = Item::find($id);
        $pc = Pc::all();
        foreach($item as $items){
            foreach($pc as $pcs){
            //if($items->id == $pcs->item_id){
                return $pc;
            //}

        }
        }*/
        //$pc = Pc::find($id);
        
        return view('pcs.edit',compact('pcs'));
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
        $pc = Pc::find($id);
        $pc->fill($request->all());
        $pc->save();

        Session::flash('message','Computadora editada correctamente');
        return Redirect::to('/compu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $compu = Computadoras::find($id);

        \Storage::delete($compu->path);
        $compu->delete();
        
        Session::flash('message','Computadora editada correctamente');
        return Redirect::to('/compu');
    }
}
