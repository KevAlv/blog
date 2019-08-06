@extends('layouts')
@section('content')
<link rel="stylesheet" type="text/css" href="css/styles.css">
@if(empty($posts))
    <h2>Aun no hay articulos</h2>
@endif
                 @foreach ($posts as $post )
                 <li>{{$post}}</li>
                 @endforeach

@endsection