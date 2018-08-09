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
        {{$recetas = \App\Receta::simplePaginate(3)}}
        @foreach ($recetas as $receta)
        <div class="posteos">
          <div class="gestor-posteo">
            @if (Auth::check())
              <img class="avatar-publicacion" src="./images/avatar/{{Auth::user()->avatar}}" alt="avatar" width=30px height=30px style=border-radius:50% >
            @endif
            <p class="nombre-usuario">{{Auth::user()->name}}</p>
            <p class="compartio-receta">compartio una receta</p>
          </div>

          <h3 class="nombre-receta">{{$receta->nombre}}</h3>
          <img class="imagen-posteo" src="/images/recetas/{{$receta->foto_comida}}" alt="imagen_posteo">
          <p class="tipo-receta">Tipo de receta: {{\App\TipoReceta::find($receta->tipo)->tipo}}</p>
          <textarea class="descripcion-receta" name="descripcion" rows="8" cols="80" >{{$receta->descripcion}}</textarea>
          <form action="{{ URL::to('recetas/' . $receta->id) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            {{-- <input  type="submit" class="submit" name="Submit" value="Eliminar" /> --}}
            <div class="mini_container">
              <div class="">
                <button type="submit" class="submit">
                  Eliminar
                </button>
              </div>
            </div>
          </form>
        </div>
        @endforeach
        {{$recetas->withPath('perfil')}}

@endsection
