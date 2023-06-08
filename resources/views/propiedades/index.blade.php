@extends('layouts.app')

@section('content')
<table class="property-table">
    <thead>
      <tr>
        <th class="property-table__header">Opciones</th>
        <th class="property-table__header">Nombre</th>
        <th class="property-table__header">Dirección</th>
        <th class="property-table__header">Características</th>
        <th class="property-table__header">Estado</th>
        <th class="property-table__header">Precio Alquiler</th>
      </tr>
    </thead>
    <tbody>
      @if (count($propiedad) <= 0)
      <tr>
        <td colspan="6" class="property-table__no-results">No hay resultados</td>
      </tr>
      @else
        @foreach ($propiedad as $reg)
          <tr>
            <td class="property-table__actions">
              <a href="{{route('propiedad.edit', $reg->id)}}" class="property-table__action-link"><i class="fas fa-edit"></i></a>
              <form method="POST" action="{{ route('propiedad.destroy', $reg->id) }}">
                @method('DELETE')
                @csrf
                <button type="submit" class="property-table__action-button">
                    <i class="far fa-trash-alt"></i>
                </button>
              </form>
            </td>
            <td class="property-table__data">{{$reg->nombre}}</td>
            <td class="property-table__data">{{$reg->direccion}}</td>
            <td class="property-table__data">{{$reg->caracteristicas}}</td>
            <td class="property-table__data">{{$reg->estado}}</td>
            <td class="property-table__data property-table__data--last">{{$reg->precioalquiler}}</td>
          </tr>
        @endforeach
      @endif
    </tbody>
</table>
@endsection
