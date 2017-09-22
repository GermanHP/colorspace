
<!-- Modal Contacto-->
<div class="modal fade" id="modalContacto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalLabel">{{trans('modals.write')}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" id="sample2">
                        <label class="mdl-textfield__label" for="sample2">{{trans('modals.name')}}</label>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" id="sample3">
                        <label class="mdl-textfield__label" for="sample3">{{trans('modals.mail')}}</label>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield">
                        <textarea class="mdl-textfield__input" type="text" rows= "5" id="sample5" ></textarea>
                        <label class="mdl-textfield__label" for="sample5">{{trans('modals.text')}}</label>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">{{trans('modals.close')}}</button>
                <button type="button" class="btn btn-primary">{{trans('modals.enviar')}}</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Login-->
<div id="modalLogin" class="modal fade" role="dialog">
    <div class="modal-dialog modal-sm">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title text-center">Iniciar Sesión</h4>
            </div>
            <img class="center-block" src="img/logospace.png" width="100" height="100">
            <div class="modal-body">
                <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <div class="mdl-textfield mdl-js-textfield{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="mdl-textfield__label">Usuario</label>


                            <input id="email" type="email" class="mdl-textfield__input" name="email" value="{{ old('email') }}" required autofocus placeholder="correo">

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif

                    </div>
                    <br>

                    <div class="mdl-textfield mdl-js-textfield{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="mdl-textfield__label">Contraseña</label>


                            <input id="password" type="password" class="mdl-textfield__input" name="password" required placeholder="contraseña">

                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif

                    </div>
                    <br>

                    <div class="mdl-textfield mdl-js-textfield">

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" class="mdl-checkbox__input" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                </label>
                            </div>

                    </div>
                    <br>

                    <div class="mdl-textfield mdl-js-textfield">

                            <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                                Iniciar Sesión
                            </button>

                            <br>
                    </div>
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        ¿Olvidaste la contraseña?
                    </a>
                    <br>
                    <a class="btn btn-link" href="#" data-toggle="modal" data-target="#modalRegister">Crear cuenta</a>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>

    </div>
</div>

<!-- Modal Register-->
<div id="modalRegister" class="modal fade" role="dialog">
    <div class="modal-dialog modal-sm">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title text-center">Registrarme</h4>
            </div>
            <img class="center-block" src="img/logospace.png" width="100" height="100">
            <div class="modal-body">
                <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}

                    <div class="mdl-textfield mdl-js-textfield{{ $errors->has('nombre') ? ' has-error' : '' }}">
                        <label for="nombre" class="mdl-textfield__label">Nombre</label>


                            <input id="nombre" type="text" class="mdl-textfield__input" name="nombre" value="{{ old('nombre') }}" required autofocus>

                            @if ($errors->has('nombre'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                            @endif

                    </div>
                    <br>

                    <div class="mdl-textfield mdl-js-textfield{{ $errors->has('apellido') ? ' has-error' : '' }}">
                        <label for="apellido" class="mdl-textfield__label">Apellido</label>


                            <input id="apellido" type="text" class="mdl-textfield__input" name="apellido" value="{{ old('apellido') }}" required autofocus>

                            @if ($errors->has('apellido'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('apellido') }}</strong>
                                    </span>
                            @endif

                    </div>
                    <br>

                    <div class="mdl-textfield mdl-js-textfield">
                        {{Form::label('Fecha de Nacimiento',null,['class'=>'mdl-textfield__label'])}}
                        <br>
                        {{Form::date('fechaDeNacimiento', \Carbon\Carbon::now()->addYears(-18))}}
                    </div>
                    <br>

                    <div class="mdl-textfield mdl-js-textfield{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="mdl-textfield__label">E-Mail</label>


                            <input id="email" type="email" class="mdl-textfield__input" name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif

                    </div>
                    <br>

                    <div class="mdl-textfield mdl-js-textfield{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="mdl-textfield__label">Contraseña</label>


                            <input id="password" type="password" class="mdl-textfield__input" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif

                    </div>
                    <br>

                    <div class="mdl-textfield mdl-js-textfield">
                        <label for="password-confirm" class="mdl-textfield__label">Confirmar Contraseña</label>


                            <input id="password-confirm" type="password" class="mdl-textfield__input" name="password_confirmation" required>

                    </div>
                    <br>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                                Registrarme
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>

    </div>
</div>


<!-- Modal Gallery -->
<div class="modal" id="img1">
    <h3>Paisaje 1</h3>
    <div class="imagen">
        <a href="#img4">&#60;</a>
        <a href="#img2"><img src="/img/torre.JPG"></a>
        <a href="#img2">></a>
    </div>
    <a class="cerrar" href="">X</a>
</div>

<div class="modal" id="img2">
    <h3>Paisaje 2</h3>
    <div class="imagen">
        <a href="#img1">&#60;</a>
        <a href="#img3"><img src="img/4.JPG"></a>
        <a href="#img3">></a>
    </div>
    <a class="cerrar" href="">X</a>
</div>

<div class="modal" id="img3">
    <h3>Paisaje 3</h3>
    <div class="imagen">
        <a href="#img2">&#60;</a>
        <a href="#img4"><img src="http://www.forodefotos.com/attachments/naturaleza/16230d1294773821-fotos-de-paisajes-fotos-de-paisajes-nevado.jpg"></a>
        <a href="#img4">></a>
    </div>
    <a class="cerrar" href="">X</a>
</div>

<div class="modal" id="img4">
    <h3>Paisaje 4</h3>
    <div class="imagen">
        <a href="#img3">&#60;</a>
        <a href="#img1"><img src="http://altavistaonline.info/wp-content/uploads/2015/07/paisaje-oto-al-10834.jpg"></a>
        <a href="#img1">></a>
    </div>
    <a class="cerrar" href="">X</a>
</div>

