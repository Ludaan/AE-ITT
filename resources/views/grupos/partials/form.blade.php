<div class="form-group">
	{{ Form::label('activities_id', 'Actividad') }}
	{{Form::select('activities_id', $activities , null, ['class' => 'form-control'])}}
	{{ Form::label('user_id', 'Promotor') }}
	{{Form::select('user_id', $user , null, ['class' => 'form-control'])}}
    {{ Form::label('anio', 'Año') }}
    {{ Form::select('anio', array(
                    
                    '2015' => '2015',
                    '2016' => '2016',
                    '2017' => '2017',
                    '2018' => '2018',
                    '2019' => '2019',
                    '2020' => '2020',
                    '2021' => '2021',
                    '2022' => '2022',
                    '2023' => '2023',
                    '2024' => '2024',
                    '2025' => '2025',
                    '2026' => '2026',
                    '2027' => '2027',
                    '2028' => '2028',
                    '2029' => '2029',
                    '2030' => '2030'
    
                    ),null, ['class' => 'form-control'])}}
    {{ Form::label('periodo', 'Periodo') }}
    {{ Form::select('periodo', array(
                    
                    'Agosto-Diciembre' => 'Agosto-Diciembre',
                    'Enero-Junio' => 'Enero-Junio'
    
                    ),null, ['class' => 'form-control'])}}
	
	
	<table class="table table-striped table-hover">
		{{ Form::label('horarios_id', 'Horario') }}
        <thead>
            <tr>
               <th >Lunes</th>
               <th >Martes</th>
               <th >Miercoles</th>
               <th >Jueves</th>
               <th >Viernes</th>
            </tr>
        </thead>
        	<tr>
        		<th>{{ Form::select('lunes', array(
					
					'----' => '----',
    				'09-11' => '09-11',
    				'11-13' => '11-13',
    				'13-15' => '13-15',
    				'15-17' => '15-17',
    				'17-19' => '17-19'
    
					),null, ['class' => 'form-control'])}}
				</th>
				<th>{{ Form::select('martes', array(
	
					'----' => '----',
    				'09-11' => '09-11',
    				'11-13' => '11-13',
    				'13-15' => '13-15',
    				'15-17' => '15-17',
    				'17-19' => '17-19'
    
					),null, ['class' => 'form-control'])}}
				</th>
				<th>{{ Form::select('miercoles', array(
					
					'----' => '----',
    				'09-11' => '09-11',
    				'11-13' => '11-13',
    				'13-15' => '13-15',
    				'15-17' => '15-17',
    				'17-19' => '17-19'
    
					),null, ['class' => 'form-control'])}}
				</th>
				<th>{{ Form::select('jueves', array(
	
					'----' => '----',
    				'09-11' => '09-11',
    				'11-13' => '11-13',
    				'13-15' => '13-15',
    				'15-17' => '15-17',
    				'17-19' => '17-19'
    
					),null, ['class' => 'form-control'])}}
				</th>
				<th>{{ Form::select('viernes', array(
	
					'----' => '----',
    				'09-11' => '09-11',
    				'11-13' => '11-13',
    				'13-15' => '13-15',
    				'15-17' => '15-17',
    				'17-19' => '17-19'
    
					),null, ['class' => 'form-control'])}}
				</th>
        	</tr>
        <tbody>
        </tbody>
    </table>

</div>

<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>