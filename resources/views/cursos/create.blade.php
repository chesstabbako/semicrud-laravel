@extends('layouts.plantilla')

@section('title')
  create
@endsection

@section('content')
  
  <h1>Welcome create</h1>

  <form action="{{route('cursos.store')}}" method="post">

    @csrf

   <div>

    <label for="name">Name:</label>
    <input type="text" name="name" value="{{old('name')}}">
    <p>@error('name')
      *{{$message}} 
    @enderror</p>

   </div>

   <div>

    <label for="description">Descripción:</label>
    <textarea name="description" cols="30" rows="10">{{old('description')}}</textarea>
    <p>@error('description')
      *{{$message}} 
    @enderror</p>
   </div>

   <div>

    <label for="categoria">Categoria:</label>
    <input type="text" name="categoria" value="{{old('categoria')}}">
    <p>@error('categoria')
      *{{$message}} 
    @enderror</p>
    
   </div>

   <input type="submit"
    value="Enviar">

  </form>

@endsection