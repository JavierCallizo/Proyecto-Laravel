@extends('layouts.2app')

@section('title', "Error 404")

@section('content')

<section class="content-header">
    <h1>
        404 Error Page
    </h1>
    <ol class="breadcrumb">
        <li class="active">404 error</li>
    </ol>
</section>

<section class="content">
    <div class="error-page">
        <h2 class="headline text-yellow"> 404</h2>

        <div class="error-content">
            <h3><i class="fa fa-warning text-yellow"></i> Oops! Página no encontrada.</h3>

            <p>
                No se pudo encontrar la página que estas busando.
                Mientras tanto, puede <a href="{{route('home')}}"> regresar al Inicio </a> o intentar usar el formulario de búsqueda.
            </p>

            <form class="search-form">
                <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Search">

                <div class="input-group-btn">
                    <button type="submit" name="submit" class="btn btn-warning btn-flat"><i class="fa fa-search"></i>
                    </button>
                </div>
                </div>

            </form>
        </div>

    </div>

</section>

@endsection