<?php

namespace PaginaServicio\Http\Controllers;

use Illuminate\Http\Request;
use PaginaServicio\Lugar;

class LugarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listing(){
            $salas = Lugar::all();
            return response()->json(
                $salas->toArray()
                );
        
    }

    public function index()//Request $request)
    {
        
            //$salas = Lugar::all();
            /*return response()->json(
                $salas->toArray()
                );*/
            return view ('lugar.index');//, compact($salas->toArray()));
        
        //return view('sala.index');
        //$salas = Salas::Salas();
        //return view('sala.index',compact('salas'));
        //return view('sala.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lugar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->ajax()){

            Lugar::create($request->all());
        
            return response()->json([
                "mensaje" => $request->all()
                ]);
            //return Redirect::to('/lugares');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sala = Lugar::find($id);
        /*return view('sala.modal', ['salas'=>$sala->response()->json(
            toArray()
            )]);*/
        return response()->json(
                $sala->toArray()
            );
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
        $sala = Lugar::find($id);
        $sala->fill($request->all());
        $sala->save();

        return response()->json([
                "mensaje" => "listo"
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
          $sala = Lugar::find($id);
           $sala->delete();
            return response()->json([
                "mensaje" => "borrado"
                ]); 
        
    }
}
