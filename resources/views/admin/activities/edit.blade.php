@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Actividades
                </div>

                <div class="panel-body">
                    
                    {!! Form::model($activities, ['route' => ['admin.activities.update', $activities->id],
                    'method' => 'PUT']) !!}
                    	@include('admin.activities.partials.form')

                    {!! Form::close() !!}
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection