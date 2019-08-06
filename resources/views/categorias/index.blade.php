@extends('layouts')
@section('content')
<h1>Categorias</h1>
<ul>
@foreach($categorias as $categoria)
<li>
	<a href="/categorias/{{$categoria->id}}">{{$categoria->nombre}}</a>
	

</li>
@endforeach
</ul>
@endsection