@extends('layouts.2app')

@section('title', "Perfil")

@section('subtitle', "Home")
@section('coment', "Perfil")
@section('breadcrumb')
    <li><a href="{{ route('home') }}"><i class="fa fa-road"></i> Home</a></li>
    <li class="active">Perfil</li>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    This is your profile
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
