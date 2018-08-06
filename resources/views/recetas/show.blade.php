@extends('layouts.pags')

@section('content')
<section class="cuerpo">
  <div class="container">
    <div class="panel">
      <div class="mini_container">
        <label>Nombre: </label>{{ $receta -> nombre }}
      </div> 
      <div class="mini_container">
        <label>Descripcion: </label>{{ $receta -> descripcion }}
      </div>      
      <div class="mini_container">
        <label>Tipo: </label>{{ $receta -> tipo }}
      </div>
      <div class="mini_container">
        <label>Apto Celiacos: </label>{{ $receta -> apto_celiacos }}
      </div>          
    </div>
  </div>
</section>
@endsection
