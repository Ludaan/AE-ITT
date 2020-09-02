@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Actividades
                    
                    <a href="{{ route('admin.activities.create') }}"
                    class="btn btn-primary pull-right">
                        Crear
                    </a>
                  

                </div>

                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th >Nombre</th>
                                <th colspan="3">&nbsp</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($activities as $activitie)
                            <tr>
                                <td>{{ $activitie->id}}</td>
                                <td>{{ $activitie->nombre}}</td>
                                <td>
                              
                                <a href="{{ route('admin.activities.show', $activitie->id) }}" class="btn btn-sm btn-default">
                                    Ver                                    
                                </a>
                               
                                </td>

                                <td>
                              
                                <a href="{{ route('admin.activities.edit', $activitie->id) }}" class="btn btn-sm btn-default">
                                    Editar
                                </a>
                             
                                </td>
                                <td>
                                
                                {!! Form::open(['route'=> ['admin.activities.destroy', $activitie->id],
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
                    {{ $activities->render()}}                    

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
