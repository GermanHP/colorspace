
<h3>Datos del Usuario</h3>
<div class="mdl-textfield mdl-js-textfield">
    {{Form::label('Nombres',null,['class'=>'mdl-textfield__label'])}}
    <br>
    {{Form::text('nombre',null, ['class'=>'mdl-textfield__input', 'placeholder'=>'Nombres'])}}
</div>
<br>
<div class="mdl-textfield mdl-js-textfield">
    {{Form::label('Apellidos',null,['class'=>'mdl-textfield__label'])}}
    <br>
    {{Form::text('apellido',null, ['class'=>'mdl-textfield__input', 'placeholder'=>'Apellidos'])}}
</div>
<br>
<div class="mdl-textfield mdl-js-textfield">
    {{Form::label('Correo Electrónico',null,['class'=>'mdl-textfield__label'])}}
    <br>
    {{Form::email('email',null, ['class'=>'mdl-textfield__input', 'placeholder'=>'e-mail', 'id'=>'correoPadre', 'aria-describedby'=>'basic-addon1'])}}
</div>
<br>
<div class="mdl-textfield mdl-js-textfield">
    {{Form::label('Género',null,['class'=>'mdl-textfield__label'])}}
    <br>
    <label class="radio-inline">{!! Form::radio('genero','1', true) !!}Masculino</label>
    <label class="radio-inline">{!! Form::radio('genero','0') !!}Femenino</label>
</div>
<br>
<div class="mdl-textfield mdl-js-textfield">
    {{Form::label('Fecha de Nacimiento',null,['class'=>'mdl-textfield__label'])}}
    <br>
    {{Form::date('fechaDeNacimiento', \Carbon\Carbon::now()->addYears(-18))}}
</div>
<br>
{!!Form::submit('Guardar Datos', ['class'=>'mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent','name'=>'btnCrearUsuario'])!!}
