@extends('layouts.pags')

@section('content')


<<<<<<< HEAD
  <section class="cuerpo">
    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
      @csrf
=======
<section class="cuerpo">
<form method="POST"  enctype="multipart/form-data" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
    @csrf
    <div class="container">
        <div class="container">
            <div class="panel">
            <div class="mini_container">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
>>>>>>> e34cb5a6705db1fa47c3a30ccd9539da41bc36c6

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
<<<<<<< HEAD
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
=======
                <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                <div class="col-md-6">
                    <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>

                    @if ($errors->has('username'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('username') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="mini_container">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="mini_container">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
>>>>>>> e34cb5a6705db1fa47c3a30ccd9539da41bc36c6

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

<<<<<<< HEAD
=======
            <div class="mini_container">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
>>>>>>> e34cb5a6705db1fa47c3a30ccd9539da41bc36c6

            <div class="mini_container">
              <div class="">
                <button type="submit" class="submit">
                  {{ __('Register') }}
                </button>
              </div>
            </div>

<<<<<<< HEAD
=======
              <div class="mini_container">
                Cargar imagen:
              <!-- <input type="hidden" name="MAX_FILE_SIZE" value="30000"/> -->
                <input type="file" name="avatar" id=""/>
                <span id="avatar_error" class="error"><?php echo isset( $errores["avatar"]) ? $errores["avatar"] : ""  ; ?></span>
              </div>





            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
                    </button>
                </div>
            </div>
>>>>>>> e34cb5a6705db1fa47c3a30ccd9539da41bc36c6
        </div>

        <div class="imagenes_decoracion_registro">
            <p>"No existe modernidad sin una buena tradicion!"</p>
            <img class="imagenes"src="images/imagen3.jpg" alt="foto_plato">
        </div>
      </div>
    </form>
  </section>

@endsection
