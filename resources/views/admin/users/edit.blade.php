@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Promotores
                </div>

                <div class="panel-body">
                    
                    {!! Form::model($user, ['route' => ['admin.users.update', $user->id],
                    'method' => 'PUT', 'files'=>true]) !!}
                    	@include('admin.users.partials.form')

                    {!! Form::close() !!}
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection