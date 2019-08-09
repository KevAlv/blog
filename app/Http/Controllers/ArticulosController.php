<?php

namespace App\Http\Controllers;
use App\Articulo;
use App\Http\Requests\CrearArticulosRequest;

use Illuminate\Http\Request;

class ArticulosController extends Controller
{
    public function index()
    {
/*    	$articulos=\DB::table('articulos')->select('id','titulo')->get();
*/ 
$articulos=Articulo::all();
   	return view('articulos.index',compact('articulos'));
    }

    public function show(Articulo $articulo){
    
return view('articulos.show',compact('articulo')); 
    }
public  function create()
{
return view('articulos.create');
}



public function store(CrearArticulosRequest $request)
{
//vamos almacenar en la bd los datos
	//metodo 1
/*	$articulo = new Articulo;
	$articulo->titulo=$request->input('titulo');
	$articulo->contenido=$request->input('contenido');
	$articulo->categoria_id=$request->input('categoria_id');
$articulo->save();*/

// metodo 2 para tablas grandes
//para que funcione correctamente agragamos el campo  protected fillable en el modelo

Articulo::create($request->All());
return "completado";
}
}
