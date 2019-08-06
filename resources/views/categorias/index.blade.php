@extends('layouts')
@section('content')
<h1>Categorias</h1>
<ul>
@foreach($categorias as $categoria)
<li>
	{{$categoria->nombre}}
</li>
@endforeach
</ul>
@endsection