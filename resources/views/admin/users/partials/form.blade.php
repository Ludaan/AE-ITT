<div class="form-group">
	{{ Form::label('name', 'Nombre del usuario') }}
	{{ Form::text('name', null, ['class' => 'form-control']) }}
	{{ Form::label('email', 'Correo Electronico') }}
	{{ Form::text('email', null, ['class' => 'form-control']) }}
	{{ Form::label('tel', 'Telefono') }}
	{{ Form::text('tel', null, ['class' => 'form-control']) }}
	{{ Form::label('nocontrol', 'Numero de control') }}
	{{ Form::text('nocontrol', null, ['class' => 'form-control']) }}
	{{ Form::label('edad', 'Edad') }}
	{{ Form::text('edad', null, ['class' => 'form-control']) }}
	{{ Form::label('role_id', 'Status') }}
	{{Form::select('role_id', $roles , null, ['class' => 'form-control'])}}
	{{ Form::label('ruta_foto', 'Foto') }}
	 @if($user->ruta_foto != ''  || $user->ruta_foto != ' ' )
        <img align="center" style="display:block; margin:auto;" src="/images/{{$user->ruta_foto}}" align="center" width="200" height="300">
     @else
     @endif
	{{Form::file('ruta_foto',null, ['class' => 'form-control'])}}

</div>

<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>