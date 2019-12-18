@extends('tarjetas.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Tarjetas</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('tarjetas.create') }}"> Registrar nueva tarjeta</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('Exito'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nombre</th>
            <th>Fecha de Nacimiento</th>
            <th>Numero de Tarjeta</th>
            <th>RFC</th>
            <th width="280px">Acciones</th>
        </tr>
        @foreach ($tarjetas as $tarjeta)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $tarjeta->nombre }}</td>
            <td>{{ $tarjeta->fecha_nacimiento }}</td>
            <td>{{ $tarjeta->numero_tarjeta }}</td>
            <td>{{ $tarjeta->RFC }}</td>
            <td>
                <form action="{{ route('tarjetas.destroy',$tarjeta->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('tarjetas.show',$tarjeta->id) }}">Mostrar</a>
    
                    <a class="btn btn-primary" href="{{ route('tarjetas.edit',$tarjeta->id) }}">Editar</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $tarjetas->links() !!}
      
@endsection