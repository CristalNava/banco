@extends('tarjetas.layout')
   
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Agregar Tarjetas </h2>
                </div>
            <div class="pull-rigth">
                <a class="btn btn-primary"href="{{route('tarjetas.index')}}">Regresar </a>
            </div>
        </div>    
    </div>        
@if($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong>

        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach

        </ul>

    </div>
@endif

<form action="{{route('tarjetas.store')}}" method="POST">
    @csrf
    <div class="row">
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                <input type="text" name="nombre" class="form-control" placeholder="Nombre">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Fecha de Nacimiento:</strong>
                <input type="date" name="fecha_nacimiento" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Numero de tarjeta:</strong>
                <input type="text" name="numero_tarjeta" class="form-control" placeholder="Numero de Tarjeta">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>RFC:</strong>
                <input type="RFC" name="RFC" class="form-control" placeholder="RFC">
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Crear</button>
        </div>
    </div>
   
</form>
@endsection