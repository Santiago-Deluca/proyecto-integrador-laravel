@extends('layouts.pags')

@section('content')

<section class="cuerpo">
  <form method="POST" enctype="multipart/form-data" action="{{ route('recetasStore') }}" id="recetasform">
  @csrf  
    <div class="container">
      <div class="panel">
        <h3 class="text_login">Mi Receta</h3>
        <div class="mini_container">
          <label for="nombre">Nombre: </label>
          <input type="text" name="nombre" class="espacio_de_relleno" id="nombre" value=""  maxlength="50" /><br/>
        </div> 
        <div class="mini_container">
          <label for="descripcion">Descripcion: </label>
          <!--<input type="textarea" name="descripcion" class="espacio_de_relleno_area" id="descripcion" value="" />-->
          <textarea name="descripcion" class="espacio_de_relleno_area" form="recetasform"></textarea><br/>
        </div>      
        <div class="mini_container">
          <label for="tipo">Tipo: </label>
          <select class="espacio_de_relleno">
            <option value="0" disabled>Seleccione por favor</option>
            @foreach (\App\TipoReceta::all() as $tipo)
              <option value="{{ $tipo -> id }}">{{ $tipo -> tipo }}</option>
            @endforeach
          </select>
        </div>
        <div class="mini_container">
          <div class="form-check">
            <label class="form-check-label" for="apto_celiacos">Apto Celiacos: </label>            
            <input class="form-check-input" type="checkbox" name="apto_celiacos" id="apto_celiacos">
          </div>    
        </div> 
        <div class="mini_container">
          Cargar imagen:
          <input type="file" name="foto_comida" id=""/>
        </div>
        <div class="mini_container">
          <div class="">
            <button type="submit" class="submit">
              Enviar
            </button>
          </div>
        </div>           
      </div>
    </div>
  </form>  
</section>
@endsection