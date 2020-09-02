@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Grupos
                </div>

                <div class="panel-body">
                    
                    {!! Form::model($grupos, ['route' => ['grupos.update', $grupos->id],
                    'method' => 'PUT']) !!}
                    	@include('grupos.partials.form2')

                    {!! Form::close() !!}
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection