@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong>Grupo: </strong> {{ $grupos->activities->nombre }}  <a href="{{ route('grupos.edit', $grupos) }}" class="btn btn-sm btn-default">Editar Grupo</a>
                    <a href="{{ route('grupos.lista', $grupos) }}" class="btn btn-sm btn-default">Lista de asistencia</a>
                </div>

                <div class="panel-body" >
                    
                    <p><strong>Promotor: </strong> {{ $grupos->user->name }}</p>
                    
                    

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                   
                                <th >Lunes</th>
                                <th >Martes</th>
                                <th >Miercoles</th>
                                <th >Jueves</th>
                                <th >Viernes</th>
                                <th >&nbsp</th>
    
                            </tr>
                        </thead>
                        <tbody>
                            
                            <tr>
                                
                                <td>{{ $grupos->horarios->lunes}}</td>

                                <td>{{ $grupos->horarios->martes}}</td>

                                <td>{{ $grupos->horarios->miercoles}}</td>

                                <td>{{ $grupos->horarios->jueves}}</td>

                                <td>{{ $grupos->horarios->viernes}}</td>


                            </tr>
                            
                        </tbody>
                    </table>

                    <div class="page-header">
                            <h1> <small><strong>Alumnos inscritos</strong></small>   <a href="{{ route('alumnos.create', $grupos->id) }}" class="btn btn-sm btn-default">Agregar Alumno</a></h1> 
                                
                    </div>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                   
                                <th >Nombre</th>
                                <th >No. Control</th>
                                <th >Carrera</th>
                                <th >Semestre</th>
                                <th >Capacidad diferente</th>
                                <th >&nbsp</th>
    
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($alumnos as $alumno)
                            <tr>
                                
                                <td>{{ $alumno->name}}</td>

                                <td>{{ $alumno->nocontrol}}</td>

                                <td>{{ $alumno->carrera}}</td>

                                <td>{{ $alumno->semestre}}</td>
                                @if($alumno->discapacidad == '1')
                                <td>Si</td>
                                @else
                                <td>No</td>
                                @endif 

                                <td>
                              
                                <a href="{{ route('alumnos.show', $alumno->id) }}" class="btn btn-sm btn-default">
                                    Ver                                    
                                </a>
                               
                                </td>

                                <td>
                              
                                <a href="{{ route('alumnos.edit', $alumno->id) }}" class="btn btn-sm btn-default">
                                    Editar
                                </a>
                             
                                </td>
                                <td>
                                
                                {!! Form::open(['route'=> ['alumnos.destroy', $alumno->id],
                                'method' =>'DELETE']) !!}
                                <button class="btn btn-sm btn-danger">
                                    Eliminar                                    
                                </button>
                                {!! Form::close() !!}
                               
                                </td>


                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
                    

