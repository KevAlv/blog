<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
    	# code...
    	$posts= ['laravel basico','laravel medio','laravel avanzado'];
    return view('welcome',compact('posts'));
    }

 public function acerca()
 {

    return view('acerca_de_nosotros');

 }


 public function contacto()
 {

    return view('contacto');

 }


    }
