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
    @if($alumnos->representativo == 1)
	{{ Form::checkbox('representativo',0,true,['class' => 'form-control'])}}
    @else
    {{ Form::checkbox('representativo',0,false,['class' => 'form-control'])}}
    @endif
	{{ Form::label('Discapacidad', 'Discapacidad') }}
    @if($alumnos->discapacidad == 1)
	{{ Form::checkbox('Discapacidad',0,true,['class' => 'form-control'])}}
    @else
    {{ Form::checkbox('Discapacidad',0,false,['class' => 'form-control'])}}
    @endif
     <br>
	{{ Form::label('sexo', 'Sexo') }}
	{{ Form::select('sexo', array(
                    
                    '----' => '----',
                    'masculino' => 'Masculino',
                    'femenino' => 'Femenino'
      ),null, ['class' => 'form-control'])}}
	{{ Form::label('ruta_foto', 'Foto') }}
      @if($alumnos->ruta_foto != ''  || $alumnos->ruta_foto != ' ' )
        <img align="center" style="display:block; margin:auto;" src="/images/{{$alumnos->ruta_foto}}" align="center" width="200" height="300">
     @else
     @endif
	{{Form::file('ruta_foto',null, ['class' => 'form-control'])}}

</div>

<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>