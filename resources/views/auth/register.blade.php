@extends('layouts.pags')

@section('content')


  <section class="cuerpo">
    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
      @csrf

        <div class="container">
          <div class="panel">

            <div class="mini_container">
              <label for="name">{{ __('Name') }}</label>
              <input id="name" type="text" class="espacio_de_relleno{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                @if ($errors->has('name'))
                  <span class="error" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                  </span>
                @endif
            </div>

            <div class="mini_container">
              <label for="username">{{ __('Username') }}</label>
              <input id="username" type="text" class="espacio_de_relleno{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>
                @if ($errors->has('username'))
                  <span class="error" role="alert">
                    <strong>{{ $errors->first('username') }}</strong>
                  </span>
                @endif
            </div>

            <div class="mini_container">
              <label for="email">{{ __('E-Mail Address') }}</label>
              <input id="email" type="email" class="espacio_de_relleno{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                @if ($errors->has('email'))
                  <span class="error" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                  </span>
                @endif
            </div>

            <div class="mini_container">
              <label for="password">{{ __('Password') }}</label>
              <input id="password" type="password" class="espacio_de_relleno{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                @if ($errors->has('password'))
                  <span class="error" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                  </span>
                @endif
            </div>

            <div class="mini_container">
              <label for="password-confirm">{{ __('Confirm Password') }}</label>
              <input id="password-confirm" type="password" class="espacio_de_relleno" name="password_confirmation" required>
            </div>

            <div class="mini_container">
              <label for="avatar">{{ __('avatar') }}</label>
              <input id="avatar" type="" class="espacio_de_relleno{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                @if ($errors->has('password'))
                  <span class="error" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                  </span>
                @endif
            </div>


            <div class="mini_container">
              <div class="">
                <button type="submit" class="submit">
                  {{ __('Register') }}
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
