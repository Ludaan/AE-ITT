@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Promotores
                </div>

                <div class="panel-body" >
                    
                    <p><strong>Nombre: </strong> {{ $user->name }}</p>
                    <p><strong>Email: </strong> {{ $user->email }}</p>
                    <p><strong>Telefono: </strong> {{ $user->tel }}</p>
                    <p><strong>No control: </strong> {{ $user->nocontrol }}</p>
                    <p><strong>Edad: </strong> {{ $user->edad }}</p>
                    @if($user->role != '0')
                    
                        <p><strong>Status: </strong> {{ $user->role->nombre}}</p>
                    
                    @else

                    <p><strong>Status: </strong> </p>
                    @endif
                    <p><strong>Foto: </strong></p>
                     @if($user->ruta_foto != ''  || $user->ruta_foto != ' ' )
                    <img align="center" style="display:block; margin:auto;" src="/images/{{$user->ruta_foto}}" align="center" width="200" height="300">
                    @else
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
                    

