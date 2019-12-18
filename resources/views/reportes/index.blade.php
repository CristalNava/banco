@extends('reportes.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Reportes</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('reportes.create') }}"> Crear Reporte</a>
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
            <th>Apeido Paterno</th>
            <th>Apeido Materno</th>
            <th>Numero de Tarjeta</th>
           
            <th width="280px">Action</th>
        </tr>
        @foreach ($reportes as $reporte)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $reporte->nombre }}</td>
            <td>{{ $reporte->ApeidoPaterno }}</td>
            <td>{{ $reporte->ApeidoMaterno }}</td>
            <td>{{ $reporte->no_tarjeta }}</td>
            <td>
                <form action="{{ route('reportes.destroy',$reporte->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('reportes.show',$reporte->id) }}">Mostrar</a>
    
                    <a class="btn btn-primary" href="{{ route('reportes.edit',$reporte->id) }}">Editar</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $reportes->links() !!}
      
@endsection