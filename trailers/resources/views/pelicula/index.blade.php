@extends('layouts.app')

@section('content')
<div class="container">
<h1>Listado de Trailers</h1>


@if(Session::has('mensaje'))
    <div class="alert alert-success alert-dismissible" role="alert">
        {{Session::get('mensaje')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
@endif

    


<a href="{{url('pelicula/create')}}" class="btn btn-success">Crear Trailer</a>
<a href="{{url('pelicula/show')}}" class="btn btn-primary">Trailer</a>
<br><br>

<table class="table table-light">
    
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Poster</th>
            <th>Titulo</th>
            <th>Resumen</th>
            <th>Director</th>
            <th>Pais</th>
            <th>Genero</th>
            <th>Fecha de estreno</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach( $peliculas as $pelicula )
        <tr>
            <td>{{$pelicula->id}}</td>
            <td><img class="img-thumbnail img-fluid" src="{{asset('storage').'/'.$pelicula->Link}}" width="50" height="fa-stack-1x00" alt=""></td>
            <td>{{$pelicula->Titulo}}</td>
            <td>{{$pelicula->Resumen}}</td>
            <td>{{$pelicula->Director}}</td>
            <td>{{$pelicula->Pais}}</td>
            <td>{{$pelicula->Genero}}</td>
            <td>{{$pelicula->Fecha}}</td>
            <td>

            <a href="{{url('/pelicula/'.$pelicula->id.'/edit')}}" class="btn btn-warning">Editar</a> |
            
            <form action="{{url('/pelicula/'.$pelicula->id)}}" class="d-inline" method="post">
            @csrf
            {{method_field('DELETE')}}
            <input class="btn btn-danger" type="submit" onclick="return confirm('Quierer eliminar este trailer?')" value="Eliminar">
            </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{!! $peliculas->links() !!}
</div>
@endsection