@extends('layouts.pags')

@section('content')
    <section class="cuerpo">
      @guest
      <div class="container">

        <div class="panel b20">

          <!--<h1 class="nombre-sitio">Nombre del sitio</h1>-->
          <p>La web 2.0 cambió el modo en el que las personas experimentan la realidad. En particular, dio inicio a una revolución en la que cada individuo tiene la posibilidad de aportar sin intermediarios al cuerpo de conocimiento de la humanidad, a la vez que puede acceder de forma instantánea a ese conocimiento inabarcable.</p>
          <p>Podemos compartir la experiencia de lo que vemos, la experiencia de lo que oímos, pero ¿dónde queda el sabor?</p>
          <p>Todos tenemos una receta. La que la abuela te mostró, y te lleva a esas mañanas de sol. La que siempre hace sonreir a tus chicos. La que aparece siempre en las historias de tus amigos.</p>
          <p>Yo quiero conocer la tuya, la de él, la de todos. Compartamos el sabor.</p>

        </div>
        <div class="panelb80">
          <img class="imagenesbanner" src="images/imagen1.jpg" alt="foto_banner">
        </div>
      </div>
      <div class="container">
        <h2>Cómo funciona</h2>
      </div>
      <div class="container">
        <div>
          <img class="imagenes_exp"src="images/exp1.png" alt="Explicacion 1">
        </div>
        <div>
          <img class="imagenes_exp"src="images/exp2.png" alt="Explicacion 2">
        </div>
        <div>
          <img class="imagenes_exp"src="images/exp3.png" alt="Explicacion 3">
        </div>
        <div>
          <img class="imagenes_exp"src="images/exp4.png" alt="Explicacion 4">
        </div>
      </div>
      @else

        <div  class="container-publicaciones">
          <h2> Mira las recetas de hoy</h2>

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
@endguest


    </section>






@endsection
