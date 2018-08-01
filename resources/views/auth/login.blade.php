@extends('layouts.pags')

@section('content')

<section class="cuerpo">

    <div class="container">

        <div class="panel">

                <h3 class="text_login">{{ __('Login') }}</h3>
                  <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                    @csrf

                        <div class="mini_container">
                            <label for="email">{{ __('E-Mail Address') }}</label>
                              <input id="email" type="email" class="espacio_de_relleno{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

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

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                        </div>
                        <div class="">

                        <button type="submit" class="submit">
                                    {{ __('Login') }}
                                </button>

                        </div>
                                <a class="text_login" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>

                  </div>
                                <div class="imagenes_decoracion_login">
                                  <p>"La comida es mucho mejor cuando se comparte"</p>
                                  <img class="imagenes"src="images/personas_comiendo.jpg" alt="foto_personas">
                                </div>



                    </form>
          </div>

</section>
@endsection
