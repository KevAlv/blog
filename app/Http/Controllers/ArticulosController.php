<?php

namespace App\Http\Controllers;
use App\Articulo;
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
}
