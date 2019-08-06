<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticulosController extends Controller
{
    public function index()
    {
    	$articulos=\DB::table('articulos')->select('id','titulo')->get();
    	return view('articulos.index',compact('articulos'));
    }
}
