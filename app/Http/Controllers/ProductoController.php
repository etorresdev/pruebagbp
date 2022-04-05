<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Inventario;
use Illuminate\Http\Request;
use App\Http\Resources\ProductoResource;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return ProductoResource::collection(Producto::orderBy('nombre', 'asc')->get());

        // $consulta = ProductoResource::collection(Producto::where('nombre','LIKE','%or%')->get());
        // $consulta = ProductoResource::collection(Inventario::groupBY('id_producto')->selectRaw('id_producto, sum(cantidad) as Total')->get());

        // $consulta = Inventario::join('productos', 'productos.id','=','inventarios.id_producto')

        // $consulta = Producto::join('inventarios', 'inventarios.id_producto','=','productos.id')
        // ->select('productos.nombre','productos.descripcion', 'inventarios.cantidad','inventarios.id_bodega')->get();
        // ->select('productos.nombre','productos.descripcion')
        // ->groupBY('inventarios.cantidad')->selectRaw('count(*) AS total')->orderBy('total','desc')->get();
        // ->get();

        // ->where('inventarios.cantidad')->sum('inventarios.cantidad')
        // ->selectRaw('SUM(inventarios.cantidad) AS total')->orderBy('total','desc')->get();
        // ->where('inventarios.cantidad','=', 2)->get();

        // $consulta = Producto::selectRaw('SUM(cantidad) AS total')->orderBy('total','desc')->get();


        // $consulta = Inventario::selectRaw('SUM(inventarios.cantidad) AS total')->orderBy('total','desc')//->get();
        // ->join('productos', 'productos.id','=','inventarios.id_producto')
        // ->select('productos.id','productos.nombre','productos.descripcion', 'inventarios.cantidad')->get();

        config()->set('database.connections.mysql.strict', false);

        // $consulta = Producto::join('inventarios', 'inventarios.id_producto','=','productos.id')
        // ->selectRaw('productos.id, productos.nombre, productos.descripcion , SUM(inventarios.cantidad) AS total')
        // ->groupBy('cantidad')->orderBy('cantidad' ,'desc')->get();


        $consulta = Producto::join('inventarios', 'inventarios.id_producto','=','productos.id')
        ->selectRaw('productos.id, productos.nombre, productos.descripcion, SUM(inventarios.cantidad) AS Total')//->get();
        ->groupBy('productos.nombre')->orderByDesc('total')->get();


        return $consulta;

        config()->set('database.connections.mysql.strict', true);


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto = new Producto();
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->save();

        $idprod = $producto->id;

        $inventario = new Inventario();
        $inventario->cantidad = rand(1,10);
        $inventario->id_bodega = rand(1,3);
        $inventario->id_producto = $idprod;
        $inventario->save();

        return response()->json($producto, 201);
        // return response()->json($inventario, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        return new ProductoResource($producto);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
