@extends('usuario.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Registro de Usuario</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('usuario.create') }}"> Registrar Cliente</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No Cliente</th>
            <th>Nombre</th>
            <th>Fecha_nacimiento</th>
            <th>Direccion Actual</th>
            <th>Telefono</th>
            <th>Correo_Electronico</th>
            <th width="280px">Accion</th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $user->nombre }}</td>
            <td>{{ $user->fecha_de_nacimiento }}</td>
            <td>{{ $user->direccion }}</td>
            <td>{{ $user->telefono }}</td>
            <td>{{ $user->correo_electronico }}</td>
            <td>
                <form action="{{ route('usuario.destroy',$user->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('usuario.show',$user->id) }}">Mostrar</a>
    
                    <a class="btn btn-primary" href="{{ route('usuario.edit',$user->id) }}">Editar</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $products->links() !!}
      
@endsection