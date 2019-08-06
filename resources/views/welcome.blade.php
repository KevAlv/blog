@extends('layouts')
@section('content')
@if(empty($posts))
    <h2>Aun no hay articulos</h2>
@endif
                 @foreach ($posts as $post )
                 <li>{{$post}}</li>
                 @endforeach

@endsection