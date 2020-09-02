@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Editar Asistencia
                </div>

                <div class="panel-body">
                    
                    {!! Form::model($clases, ['route' => ['grupos.clasestore', $clases->id],
                    'method' => 'PUT']) !!}
                        @include('grupos.partials.form3')

                    {!! Form::close() !!}
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection