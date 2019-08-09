@extends('layouts')

@section('content')
<h1>Crear Articulo</h1>

<form action="/articulos" method="POST" role="form">
	{{-- Me genera un token que laravel me exige por seguridad --}}
{{csrf_field()}}
{{-- Para el rellenar --}}
	<div class="form-group">
		<label for="">Titulos</label>
		<input type="text" class="form-control" name="titulo" placeholder="Escriba el titulo">
	</div>

<div class="form-group">
		<label for="">Contenido</label>
		<textarea type="text" class="form-control" name="contenido" rows="3" placeholder="Escriba el contenido"></textarea>
	</div>


<div class="form-group">
		<label for="">Categoria</label>
		<input type="text" class="form-control" name="categoria_id" placeholder="Escriba el contenido" value="1">
	</div>

	

	<button type="submit" class="btn btn-primary">Submit</button>
</form>
@stop