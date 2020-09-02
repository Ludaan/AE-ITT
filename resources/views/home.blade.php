@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Menu inicio</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <H1>Actividades extraescolares del Instituto Tecnológico de Toluca</H1>

                    <dl>
                        <dt>Aquí podra administrar las actividades, los instructores así como generar reportes.</dt>

                        <dd><li type="square">Actividades</li>
                        <li type="square">Instructores</li>
                        <li type="square">Reportes</li></dd>
                    </dl>


                     

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
