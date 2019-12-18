@extends('products.layout')
   
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Agregar Cliente </h2>
                </div>
            <div class="pull-rigth">
                <a class="btn btn-primary"href="{{route('products.index')}}">Regresar </a>
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

<form action="{{route('products.store')}}" method="POST">
    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No Cliente:</strong>
                <input type="text" name="no_cliente" class="form-control" placeholder="Cliente">
            </div>
        </div>
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
                <strong>Direccion:</strong>
                <input type="text" name="Direccion" class="form-control" placeholder="Direccion">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Telefono:</strong>
                <input type="phone" name="Telefono" class="form-control" placeholder="Telefono">
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Crear</button>
        </div>
    </div>
   
</form>
@endsection