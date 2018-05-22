@extends('layouts/2app')

@section('title', "Lista de usuarios")

@section('subtitle', "Usuarios")
@section('coment', "Listado de usuarios")
@section('breadcrumb')
    <li><a href="{{ route('home') }}"><i class="fa fa-road"></i> Home</a></li>
    <li class="active">Usuarios</li>
@endsection

@section('content')
    <section class="content">
        <p>
                <a type="button" href="{{ route('users.create')}}" class="btn btn-primary btn-sm">nuevo usuario</a>
        </p>
        <table>            
                @forelse ($users as $user)
                <tr>
                    <td>
                        {{$user->name}} {{$user->surname}}
                    </td>
                    <td>
                            <a type="button" href="{{ route('users.show',['id' => $user->id])}}" class="btn btn-primary btn-sm">Ver detalles</a>
                    </td>
                    <td>
                    <a type="button" class="btn btn-warning btn-sm">Editar</a>
                    </td>

                </tr>
                @empty
                <tr>
                    <td>No hay usuarios registrados</td>
                </tr>
                @endforelse
        </table>

    </section>
@endsection