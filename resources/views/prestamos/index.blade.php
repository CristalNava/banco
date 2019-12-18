@extends('prestamos.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Prestamos</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('prestamos.create') }}"> Crer Nuevo prestamo</a><br></br>
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
            <th>No</th>
            <th>No Cliente</th>
            <th>Nombre</th>
            <th>Fecha de Nacimiento</th>
            <th>RFC</th>
         

            <th width="280px">Accion</th>
        </tr>
        @foreach ($prestamos as $prestamo)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $prestamo->numero_cliente }}</td>
            <td>{{ $prestamo->nombre }}</td>
            <td>{{ $prestamo->fecha_nacmiento }}</td>
            <td>{{ $prestamo->RFC }}</td>

            
            <td>
                <form action="{{ route('prestamos.destroy',$prestamo->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('prestamos.show',$prestamo->id) }}">Mostrar</a>
    
                    <a class="btn btn-primary" href="{{ route('prestamos.edit',$prestamo->id) }}">Editar</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $prestamos->links() !!}
      
@endsection