@extends('layouts')
@section('content')
<div class="container">
	<h1>Articulos disponibles</h1>
	<ul>
		@foreach($articulos as $articulo)
		<li>{{$articulo->titulo}}</li>
		@endforeach
	</ul>
</div>
@endsection