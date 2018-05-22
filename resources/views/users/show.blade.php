@extends('layouts.2app')

@section('title', "datos del usuario")

@section('subtitle', "Usuario")
@section('coment', "$user->id")
@section('breadcrumb')
    <li><a href="{{ route('home') }}"><i class="fa fa-road"></i> Home</a></li>
    <li><a href="{{ route('users') }}">Usuarios</a></li>
    <li class="active"> #{{$user->id}}</li>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Datos Personales</div>

                <div class="panel-body">
                    <div> 
                        Nombre de usuario: {{$user->name}}
                    </div>
                    <div> 
                        Apellido/s: {{$user->surname}}
                    </div>
                    <div> 
                        e-mail: {{$user->email}}
                    </div>
                    <br/>
                    <div>
                        <a href="{{ route('users') }}" >Volver al listado de usuarios</a>
                    </div>
            </div>
            
        </div>
    </div>
</div>
</div>
@endsection
