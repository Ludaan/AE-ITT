@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Grupos
                    
                    <a href="{{ route('grupos.create') }}"
                    class="btn btn-primary pull-right">
                        Crear
                    </a>


                </div>

                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                   
                                <th >Actividades Culturales</th>
                                <th >Lunes</th>
                                <th >Martes</th>
                                <th >Miercoles</th>
                                <th >Jueves</th>
                                <th >Viernes</th>
                                <th >&nbsp</th>
    
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($gruposcultural as $grupocultural)
                            <tr>
                                
                                <td>{{ $grupocultural->activities->nombre}}</td>

                                <td>{{ $grupocultural->horarios->lunes}}</td>

                                <td>{{ $grupocultural->horarios->martes}}</td>

                                <td>{{ $grupocultural->horarios->miercoles}}</td>

                                <td>{{ $grupocultural->horarios->jueves}}</td>

                                <td>{{ $grupocultural->horarios->viernes}}</td>

                                <td><a href="{{ route('grupos.show', $grupocultural->id) }}" class="btn btn-sm btn-default">Gestionar grupo</a></td>

                                <td><a href="{{ route('grupos.edit', $grupocultural->id) }}" class="btn btn-sm btn-default">Editar</a></td>

                                <td>
                                {!! Form::open(['route'=> ['grupos.destroy', $grupocultural->id],
                                'method' =>'DELETE']) !!}
                                <button class="btn btn-sm btn-danger">Eliminar</button>
                                {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                         <thead>
                            <tr>
                                   
                                <th >Actividades Civicas</th>
                                <th >Lunes</th>
                                <th >Martes</th>
                                <th >Miercoles</th>
                                <th >Jueves</th>
                                <th >Viernes</th>
                                <th >&nbsp</th>
    
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($gruposcivica as $grupocivica)
                            <tr>
                                
                                <td>{{ $grupocivica->activities->nombre}}</td>

                                <td>{{ $grupocivica->horarios->lunes}}</td>

                                <td>{{ $grupocivica->horarios->martes}}</td>

                                <td>{{ $grupocivica->horarios->miercoles}}</td>

                                <td>{{ $grupocivica->horarios->jueves}}</td>

                                <td>{{ $grupocivica->horarios->viernes}}</td>

                                <td><a href="{{ route('grupos.show', $grupocivica->id) }}" class="btn btn-sm btn-default">Gestionar grupo</a></td>

                                <td><a href="{{ route('grupos.edit', $grupocivica->id) }}" class="btn btn-sm btn-default">Editar</a></td>

                                <td>
                                {!! Form::open(['route'=> ['grupos.destroy', $grupocivica->id],
                                'method' =>'DELETE']) !!}
                                <button class="btn btn-sm btn-danger">Eliminar</button>
                                {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <thead>
                            <tr>
                                  
                                <th >Actividades Deportivas</th>
                                <th >Lunes</th>
                                <th >Martes</th>
                                <th >Miercoles</th>
                                <th >Jueves</th>
                                <th >Viernes</th>
                                <th >&nbsp</th>
    
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($gruposdeportiva as $grupodeportiva)
                            <tr>
                                
                                <td>{{ $grupodeportiva->activities->nombre}}</td>

                                <td>{{ $grupodeportiva->horarios->lunes}}</td>

                                <td>{{ $grupodeportiva->horarios->martes}}</td>

                                <td>{{ $grupodeportiva->horarios->miercoles}}</td>

                                <td>{{ $grupodeportiva->horarios->jueves}}</td>

                                <td>{{ $grupodeportiva->horarios->viernes}}</td>

                                <td><a href="{{ route('grupos.show', $grupodeportiva->id) }}" class="btn btn-sm btn-default">Gestionar grupo</a></td>

                                <td><a href="{{ route('grupos.edit', $grupodeportiva->id) }}" class="btn btn-sm btn-default">Editar</a></td>

                                <td>
                                {!! Form::open(['route'=> ['grupos.destroy', $grupodeportiva->id],
                                'method' =>'DELETE']) !!}
                                <button class="btn btn-sm btn-danger">Eliminar</button>
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

                             
