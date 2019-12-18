@extends('prestamos.layout')
   
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Prestamo Cliente </h2>
                </div>
            <div class="pull-rigth">
                <a class="btn btn-primary"href="{{route('prestamos.index')}}">Regresar </a>
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

<form action="{{route('prestamos.store')}}" method="POST">
    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No Cliente:</strong>
                <input type="text" name="numero_cliente" class="form-control" placeholder="Cliente">
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
                <strong>RFC:</strong>
                <input type="text" name="RFC" class="form-control" placeholder="rfc">
            </div>
        </div>
       
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Generar prestamo</button>
        </div>
    </div>
   
</form>
@endsection