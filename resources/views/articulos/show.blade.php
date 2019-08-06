@extends('layouts')
@section('content')
<h1>{{$articulo->titulo}} </h1><small>{{$articulo->categoria->nombre}}</small>

<p>{{$articulo->contenido}}</p>
@endsection