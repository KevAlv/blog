<?php

namespace App\Http\Controllers;
use App\Categoria;	
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    public function index(){
$categorias=Categoria::All();
return view('categorias.index',compact('categorias'));
    }


    public function show(Categoria $categoria){

    	return view('categorias.show',compact('categoria'));

    }
}
