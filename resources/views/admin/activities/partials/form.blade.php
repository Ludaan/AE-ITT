<div class="form-group">
	{{ Form::label('nombre', 'Nombre de la actividad') }}
	{{ Form::text('nombre', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('descripcion', 'Descripción de la actividad') }}
	{{ Form::text('descripcion', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('tipo', 'Tipo de actividad:') }}

	{{ Form::select('tipo', array(
	
    'Deportiva' => 'Deportiva',
    'Cultural' => 'Cultural',
    'Civica' => 'Civica'
    
),null, ['class' => 'form-control'])
}}


</div>

<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>