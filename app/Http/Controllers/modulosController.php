<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modulos;

class modulosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modulos = modulos::all();
        return response()->json(['modulos'=>$modulos, 'status'=>200]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $modulo = new modulos();
        $modulo->mod_nombre = $request->nombre;
        $modulo->mod_img = $request->img;
        $modulo->mod_descripcion = $request->descripcion;
        $modulo->mod_url = $request->url;
        $modulo->mod_visitas = $request->visitas;
        $modulo->mod_orden = $request->orden;
        $modulo->mod_estado = $request->estado;

        $modulo->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $modulo = modulos::findOrFail($request->id);
        error_log($modulo);
        return $modulo;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $modulo = modulos::findOrFail($request->id);
        $modulo->mod_nombre = $request->nombre;
        $modulo->mod_img = $request->img;
        $modulo->mod_descripcion = $request->descripcion;
        $modulo->mod_url = $request->url;
        $modulo->mod_visitas = $request->visitas;
        $modulo->mod_orden = $request->orden;
        $modulo->mod_estado = $request->estado;

        $modulo->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $modulo = modulos::destroy($request->id);
        return $modulo;
    }
}
