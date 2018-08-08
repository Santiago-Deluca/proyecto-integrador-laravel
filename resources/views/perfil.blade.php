@extends('layouts.pags')

@section('content')
    <section class="cuerpo">
      <div class="info-usuario">
        <div class="imagen-perfil">
          @if (Auth::check())
        	  <img src="./images/avatar/{{Auth::user()->avatar}}" alt="avatar" width=200px height=200px  style=border-radius:50% >
          @endif
        </div>
        @if (Auth::check())
        <p class="nombre-usuario">{{Auth::user()->name}}</p>
        <p class="email-usuario">{{Auth::user()->email}}</p>
        @endif
      </div>

      <div class="container-publicaciones">

        @foreach (\App\Receta::all() as $receta)
        <div class="posteos">
          <div class="gestor-posteo">
            @if (Auth::check())
              <img class="avatar-publicacion" src="./images/avatar/{{Auth::user()->avatar}}" alt="avatar" width=30px height=30px style=border-radius:50% >
            @endif
            <p class="nombre-usuario">{{Auth::user()->name}}</p>
            <p class="compartio-receta">compartio una receta</p>
          </div>

          <h3 class="nombre-receta">{{$receta->nombre}}</h3>
          <img class="imagen-posteo" src="\images\fotos_recetas\photobrownie.jpg" alt="imagen_posteo">
          <p class="tipo-receta">Tipo de receta: {{$receta->tipo}}</p>
          <textarea class="descripcion-receta" name="descripcion" rows="8" cols="80" >{{$receta->descripcion}}</textarea>
          <a class="eliminar-publicacion" href="\app\Http\Controllers\RecetasController">Eliminar publicacion</a>
        </div>
        @endforeach

@endsection
