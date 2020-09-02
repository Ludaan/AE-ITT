@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Alumnos
                </div>

                <div class="panel-body">
                    
                    {!! Form::model($alumnos, ['route' => ['alumnos.update',$alumnos->id],
                    'method' => 'PUT', 'files'=>true]) !!}
                    	@include('alumnos.partials.form2')

                    {!! Form::close() !!}
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection