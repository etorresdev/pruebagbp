<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Bodega;
use Illuminate\Http\Request;

use App\Http\Resources\BodegaResource;

class BodegaController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return BodegaResource::collection(Bodega::orderBy('nombre', 'asc')->paginate());
        // return response()->json($this->bodega->paginate());

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Colocar el nombre de la bodega
        //Opcional los campos de responsable y estado

        $bodega = new Bodega();
        $bodega->nombre = $request->nombre;
        $bodega->id_responsable = $request->id_responsable;
        $bodega->estado = $request->estado;

        $bodega->save();

        return response()->json($bodega, 201);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bodega  $bodega
     * @return \Illuminate\Http\Response
     */
    public function show(Bodega $bodega)
    {
        return new BodegaResource($bodega);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bodega  $bodega
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bodega $bodega)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bodega  $bodega
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bodega $bodega)
    {
        //
    }
}
