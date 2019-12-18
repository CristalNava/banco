@extends('usuario.layout')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Agregar nuevo Cliente </h2>
                </div>
            <div class="pull-rigth">
                <a class="btn btn-primary"href="{{route('usuario.user')}}">Regresar </a>
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

<form action="{{route('usuario.store')}}" method="POST">
    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                <input type="text" name="name" class="form-control" placeholder="Nombre">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Fecha de nacimiento:</strong>
                <input type="date" name="date" class="form-control" placeholder="">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Direccion Actual:</strong>
                <input type="text" name="name" class="form-control" placeholder="Direccion">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Telefono:</strong>
                <input type="tel" name="telefono" class="form-control" placeholder="Telefono">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Correo Electonico:</strong>
                <input type="email" name="email" class="form-control" placeholder="example@gmail.com">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Crear</button>
        </div>
    </div>
   
</form>
@endsection