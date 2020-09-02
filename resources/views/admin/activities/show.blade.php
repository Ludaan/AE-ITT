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
                    <p><strong>Nombre: </strong> {{ $activities->nombre }}</p>
                    <p><strong>Descripcion: </strong> {{ $activities->descripcion }}</p>
                    <p><strong>Tipo de Actividad: </strong>{{ $activities->tipo}}</p>
                  
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
                    

