@extends('layouts.plantilla')

@section('title')
  Editar
@endsection

@section('content')
  
  <h1>Welcome editar</h1>

  <form action="{{route('cursos.update', $curso)}}" method="post">

    @csrf
    @method('put')

   <div>

    <label for="name">Name:</label>
    <input type="text" name="name" value="{{old('name', $curso->name)}}">
    <p>@error('name')
    *{{$message}} 
    @enderror</p>

   </div>

   <div>

    <label for="description">Descripción:</label>
    <textarea name="description" cols="30" rows="10">{{old('name', $curso->description)}}</textarea>
    <p>@error('description')
    *{{$message}} 
    @enderror</p>

   </div>

   <div>

    <label for="categoria">Categoria:</label>
    <input type="text" name="categoria" value="{{old('name', $curso->categoria)}}">
    <p>@error('categoria')
        *{{$message}} 
    @enderror</p>

   </div>

   <input type="submit" 
    value="Editar">

  </form>

@endsection