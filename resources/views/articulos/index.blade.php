@extends('layouts')
@section('content')
<div class="container" align="">
	<h1>Articulos disponibles</h1>
	<ul>
		@foreach($articulos as $articulo)
		<li> <a href="/articulos/{{$articulo->id}}">{{$articulo->titulo}}</a>  
			</li>
		@endforeach
	</ul>
</div>
@endsection