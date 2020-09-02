<div class="form-group">
	{{ Form::label('name', 'Nombre(s)') }}
	{{ Form::text('name', null, ['class' => 'form-control']) }}
	{{ Form::label('primer_apellido', 'Primer apellido') }}
	{{ Form::text('primer_apellido', null, ['class' => 'form-control']) }}
	{{ Form::label('segundo_apellido', 'Segundo apellido') }}
	{{ Form::text('segundo_apellido', null, ['class' => 'form-control']) }}
	{{ Form::label('nocontrol', 'Numero de control') }}
	{{ Form::text('nocontrol', null, ['class' => 'form-control']) }}
	{{ Form::label('email', 'Correo Electronico') }}
	{{ Form::text('email', null, ['class' => 'form-control']) }}
	{{ Form::label('carrera', 'Carrera') }}
	{{ Form::select('carrera', array(
                    
                    '----' => '----',
                    'electromecanica' => 'Ingeniería Electromecánica',
                    'electronica' => 'Ingeniería Electronica',
                    'gestion_empresarial' => 'Ingeniería En Gestión Empresarial',
                    'industrial' => 'Ingeniería Industrial',
                    'logistica' => 'Ingeniería En Logística',
                    'mecatronica' => 'Ingeniería Mecatrónica',
                    'quimica' => 'Ingeniería Química',
                    'sistemas' => 'Ingeniería En Sistemas Computacionales',
                    'tics' => 'Ingeniería En TIC´S'
      ),null, ['class' => 'form-control'])}}


	{{ Form::label('semestre', 'Semestre') }}
	{{ Form::select('semestre', array(
                    
                    '----' => '----',
                    'primero' => 'Primer semestre',
                    'segundo' => 'Segundo semestre',
                    'tercero' => 'Tercer semestre',
                    'cuarto' => 'Cuarto semestre',
                    'quinto' => 'Quinto semestre',
                    'sexto' => 'Sexto semestre',
                    'septimo' => 'Séptimo semestre',
                    'octavo' => 'Octavo semestre',
                    'noveno' => 'Noveno semestre',
                    'decimo' => 'Décimo semestre',
                    'onceavo' => 'Onceavo semestre',
                    'doceavo' => 'Doceavo semestre',
                    'treceavo' => 'Treceavo semestre'
      ),null, ['class' => 'form-control'])}}
	{{ Form::label('tel', 'Telefono') }}
	{{ Form::text('tel', null, ['class' => 'form-control']) }}
	{{ Form::label('edad', 'Edad') }}
	{{ Form::text('edad', null, ['class' => 'form-control']) }}
	{{ Form::label('representativo', 'Representativo') }}
	{{ Form::checkbox('representativo',0,null,['class' => 'form-control'])}}
	{{ Form::label('Discapacidad', 'Discapacidad') }}
	{{ Form::checkbox('Discapacidad',0,null,['class' => 'form-control'])}}
     <br>
	{{ Form::label('sexo', 'Sexo') }}
	{{ Form::select('sexo', array(
                    
                    '----' => '----',
                    'masculino' => 'Masculino',
                    'femenino' => 'Femenino'
      ),null, ['class' => 'form-control'])}}
	{{ Form::label('ruta_foto', 'Foto') }}
	{{Form::file('ruta_foto',null, ['class' => 'form-control'])}}

</div>

<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>