<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $fillable=['titulo','contenido','categoria_id'];

    public function tituloInvertir(){
    	return strrev($this->titulo);    }

    public function categoria(){
    	//si yo uso la convencion normal laravel buscara categoria_id
    										//le agrego elparametro 'id-cat' por ejemplos
    	return $this->belongsTo(Categoria::class);
    }	
}
