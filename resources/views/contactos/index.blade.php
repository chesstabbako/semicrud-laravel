@extends('layouts.plantilla')

@section('title')
  Contactanos
@endsection

@section('content')
  
<form action="{{route('contactanos.store')}}" method="post">

  @csrf

 <div>

  <label for="name">Nombre:</label>
  <input type="text" name="name" value="{{old('name')}}">
  <p>@error('name')
    *{{$message}} 
  @enderror</p>

 </div>

 <div>

  <label for="email">Email:</label>
  <input type="text" name="email" value="{{old('email')}}">
  <p>@error('email')
    *{{$message}} 
  @enderror</p>
  
 </div>

 <div>

  <label for="mensaje">Mensaje:</label>
  <textarea name="mensaje" rows="5">{{old('mensaje')}}</textarea>
  <p>@error('mensaje')
    *{{$message}} 
  @enderror</p>

 </div>

 <input type="submit"
  value="Enviar">

</form>

@if (session('info'))

<script>

  alert("{{session('info')}}");

</script>
    
@endif

@endsection