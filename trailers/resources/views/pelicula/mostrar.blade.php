@extends('layouts.app')

@section('content')
<div class="container">
<h1>Listado de Trailers</h1>
    <div>
        @foreach( $peliculas as $pelicula )
            
                <p>{{$pelicula->id}}</p>
                <p><img class="img-thumbnail img-fluid" src="{{asset('storage').'/'.$pelicula->Link}}" width="50" height="fa-stack-1x00" alt=""></p>
                <p>{{$pelicula->Titulo}}</p>
                <p>{{$pelicula->Resumen}}</p>
                <p>{{$pelicula->Director}}</p>
                <p>{{$pelicula->Pais}}</p>
                <p>{{$pelicula->Genero}}</p>
                <p>{{$pelicula->Fecha}}</p>
                
        @endforeach
    </div>
</div>
@endsection