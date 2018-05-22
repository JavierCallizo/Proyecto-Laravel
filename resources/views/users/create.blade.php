@extends('layouts/2app')

@section('title', " Crear usuario")
@section('subtitle', "Usuarios")
@section('coment', "Crear usuario")
@section('breadcrumb')
    <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
    <li><a href="/usuarios">Usuarios</a></li>
    <li><a href="/usuarios/nuevo">Nuevo usuario</a></li>
@endsection
@section('content')

<div class="container">

    <h2>Crear usuario</h2>

<form method="POST" action="{{ url('usuarios/crear')}}">

    {{ csrf_field() }}

    <label for="name">Nombre: </label>
    <input type="text" name="name" id="name" value="{{ old('name') }}"> <br>
    @if($errors->has('name'))
    <p class="text-danger"><span class="glyphicon glyphicon-alert"></span> <b>{{ $errors->first('name') }}</b></p>
    @endif

    <label for="surname">Nombre: </label>
    <input type="text" name="surname" id="surname" value="{{ old('surname') }}"> <br>
    @if($errors->has('surname'))
    <p class="text-danger"><span class="glyphicon glyphicon-alert"></span> <b>{{ $errors->first('surname') }}</b></p>
    @endif

    <label for="email">E-mail: </label>
    <input type="email" name="email" id="email" value="{{ old('email') }}"> <br>
    @if($errors->has('email'))
    <p class="text-danger"><span class="glyphicon glyphicon-alert"></span> <b>{{ $errors->first('email') }}</b></p>
    @endif

    <label for="password">Contraseña: </label>
    <input type="password" name="password" id="password"> <br>
    @if($errors->has('email'))
    <p class="text-danger"><span class="glyphicon glyphicon-alert"></span> <b>{{ $errors->first('password') }}</b></p>
    @endif

    <button type="submit">Crear usuario</button>

</form>

<p><a href="{{ route('users') }}">Regresar</a></p>
</div>

@endsection
