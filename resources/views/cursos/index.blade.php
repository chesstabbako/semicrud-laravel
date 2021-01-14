@extends('layouts.plantilla')

@section('title')
  index
@endsection

@section('content')
  
  <h1>Welcome index</h1>
  <a href="{{route('cursos.create')}}">
    Crear Curso
  </a>

  <ul>

    @foreach ($cursos as $curso)

        <li>
            <a href="{{route('cursos.show', $curso)}}">
                {{$curso->name}}
            </a>
        </li>

    @endforeach
    
  </ul>

  {{$cursos->links()}}

@endsection