@extends('layouts.app')

@section('content')
<table class="table table-striped table-bordered table-hover table-sm">
    <thead>
      <tr>
        <th style="">Opciones</th>
        <th style="">Nombre</th>
        <th style="">Dirección</th>
        <th style="">Caracteristicas</th>
        <th style="">Estado</th>
        <th style="">Precio Alquiler</th>

      </tr>
    </thead>
    <tbody>
      @if (count($propiedad)<=0)
      <tr>
        <td colspan="3">No hay resultados</td>
      </tr>
      @else
        @foreach ($propiedad as $reg)
          <tr>
            <td>
              <a href="{{route('propiedad.edit', $reg->id)}}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> 
              </a>
              <form method="POST" action="{{ route('propiedad.destroy', $reg->id) }}">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">
                    <i class="far fa-trash-alt"></i> Eliminar
                </button>
              </form>
            
              </td>
              <td>{{$reg->nombre}}</td>
              <td>{{$reg->direccion}}</td>
              <td>{{$reg->caracteristicas}}</td>
              <td>{{$reg->estado}}</td>
              <td>{{$reg->precioalquiler}}</td>
          </tr>
          {{-- @include('categoria.delete') --}}
        @endforeach
      @endif
    </tbody>
  </table>
@endsection