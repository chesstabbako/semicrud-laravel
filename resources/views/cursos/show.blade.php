@extends('layouts.plantilla')

@section('title')
  curso {{$curso->name}}
@endsection

@section('content')
   
  <a href="{{route('cursos.index')}}">Volver</a>
  <a href="{{route('cursos.edit', $curso)}}">Editar</a>
  <h1>Welcome show {{$curso->name}}</h1>
  <p><strong>Categoria:</strong> {{$curso->categoria}}</p>
  <p>{{$curso->description}}</p>

  <br>

  <form action="{{route('cursos.destroy', $curso)}}" method="post">

    @csrf
    @method('delete')

    <input type="submit" value="Eliminar">

  </form>

@endsection