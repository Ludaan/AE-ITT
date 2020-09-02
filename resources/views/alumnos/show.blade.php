@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Alumnos
                </div>

                <div class="panel-body" >
                    
                    <p><strong>Nombre: </strong> {{ $alumnos->name }} {{ $alumnos->primer_apellido }} {{ $alumnos->segundo_apellido }}</p>
                    <p><strong>No control: </strong> {{ $alumnos->nocontrol }}</p>
                    <p><strong>Email: </strong> {{ $alumnos->email }}</p>
                    <p><strong>Carrera: </strong> {{ $alumnos->carrera }}</p>
                     <p><strong>Semestre: </strong> {{ $alumnos->semestre }}</p>

                    <p><strong>Telefono: </strong> {{ $alumnos->tel }}</p>
                    <p><strong>Edad: </strong> {{ $alumnos->edad }}</p>
                    @if($alumnos->discapacidad == '1')
                    
                        <p><strong>Discapacidad: </strong> Si</p>
                    
                    @else

                    <p><strong>Discapacidad: </strong> No</p>
                    @endif 
                    <p><strong>Sexo: </strong> {{ $alumnos->sexo }}</p>
                    <p><strong>Foto: </strong></p>

                     @if($alumnos->ruta_foto != ''  || $alumnos->ruta_foto != ' ' )
                    <img align="center" style="display:block; margin:auto;" src="/images/{{$alumnos->ruta_foto}}" align="center" width="200" height="300">
                    @else
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
                    

