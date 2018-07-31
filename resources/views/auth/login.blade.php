@extends('layouts.app')

@section('content')


                <div class="cuerpo">
                  <div class="container">
                    <div class="panel">
                      <h3 class="text_login">Ingresar:</h3>

                        <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf


                        <div class="mini_container">
                          <label for="email" >{{ __('Direccion de email') }}</label><br/>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Ingrese su email" name="email" value="{{ old('email') }}"  required autofocus>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>


                        <div class="mini_container">
                          <label for="password" >{{ __('Contraseña') }}</label><br/>
                          <input type="password" name="password" class="espacio_de_relleno" id="password"  maxlength="50" placeholder="Ingrese su contraseña" />
                          <span id="password_error" class="error"{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>

                                <div class="mini_container">
                                    <input class="form-check-input" type="checkbox" name="recordar" id="recordar" {{ old('recordar') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="recordarr">
                                        {{ __('Recuerdame') }}
                                    </label>
                                </div>
                                {{-- --}}

                          <div class="">
                            <button type="submit" class="submit" name="submit">
                                {{ __('Login') }}
                            </button>
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                          </div>



                          <div class="imagenes_decoracion_login">
                            <p>"La comida es mucho mejor cuando se comparte"</p>
                            <img class="imagenes"src="/images/personas_comiendo.jpg" alt="foto_personas">
                          </div>

                        </div>
                    </div>
                </div>








@endsection
