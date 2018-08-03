@extends('layouts.pags')

@section('content')


<section class="cuerpo">
  <form method="POST"  enctype="multipart/form-data" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
    @csrf
    <div class="container">
      <div class="panel">
        <h3 class="text_login">Registrarse:</h3>        
        <div class="mini_container">
          <label for="name" class="">Nombre completo:</label>
          <div class="">
            <input id="name" type="text" class="espacio_de_relleno form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
            @if ($errors->has('name'))
              <span class="error" role="alert">
                {{ $errors->first('name') }}
              </span>
            @endif
          </div>
        </div>
        <div class="mini_container">
          <label for="username" class="">Nombre de usuario:</label>
          <div class="">
            <input id="username" type="text" class="espacio_de_relleno form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>
            @if ($errors->has('username'))
              <span class="error" role="alert">
                {{ $errors->first('username') }}
              </span>
            @endif
          </div>
        </div>
        <div class="mini_container">
          <label for="email" class="">eMail:</label>
            <div class="">
              <input id="email" type="email" class="espacio_de_relleno form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
              @if ($errors->has('email'))
              <span class="error" role="alert">
                {{ $errors->first('email') }}
              </span>
            @endif
          </div>
        </div>

        <div class="mini_container">
          <label for="password" class="">Contraseña:</label>
          <div class="">
            <input id="password" type="password" class="espacio_de_relleno form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="{{ old('password') }}" required>
            @if ($errors->has('password'))
              <span class="error" role="alert">
                {{ $errors->first('password') }}
              </span>
            @endif
          </div>  
        </div>
        <div class="mini_container">
          <label for="password-confirm">Confirmar Contraseña:</label>
          <div class="col-md-6">
            <input id="password-confirm" type="password" class="espacio_de_relleno form-control" name="password_confirmation" required>
          </div>
        </div>
        <div class="mini_container">
          <label for="avatar">Avatar:</label>
          <input id="avatar" type="file" class="{{ $errors->has('avatar') ? ' is-invalid' : '' }}" name="avatar" required>
        </div>

        <div class="mini_container">
          <div class="">
            <button type="submit" class="submit">
              Registrarse
            </button>
          </div>
        </div>
      </div>
      <div class="imagenes_decoracion_registro">
        <p>"No existe modernidad sin una buena tradicion!"</p>
        <img class="imagenes"src="images/imagen3.jpg" alt="foto_plato">
      </div>
    </div>
  </form>
</section>

@endsection
