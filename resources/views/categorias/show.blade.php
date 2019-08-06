@extends('layouts')
@section('content')
<h1>Categoria: {{$categoria->nombre}}</h1>
@foreach($categoria->articulos as $articulo)
<li>{{$articulo->titulo}}</li>
@endforeach
@endsection