@extends('layouts.app')

@section('content')
<form action="{{route('propiedad.update', $propiedad->id)}}" method="POST">
    <h1>Editaar</h1>
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingrese el nombre" value="{{$propiedad->nombre}}">
                <label for="nombre">Dirección</label>
                <input type="text" name="direccion" id="direccion" class="form-control" placeholder="Ingrese el direccion" value="{{$propiedad->direccion}}">
                <label for="nombre">Caracteriticas</label>
                <input type="text" name="caracteristicas" id="caracteristicas" class="form-control" placeholder="Ingrese el caracteristicas" value="{{$propiedad->caracteristicas}}">
                <label for="nombre">Estado</label>
                <input type="text" name="estado" id="estado" class="form-control" placeholder="Ingrese el estado" value="{{$propiedad->estado}}">
                <label for="nombre">Precio Alquiler</label>
                <input type="text" name="precio" id="precio" class="form-control" placeholder="Ingrese el precio" value="{{$propiedad->precioalquiler}}">

            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Guardar</button>
                <a href="{{route('inicio')}}" class="btn btn-default">Cancelar</a>
            </div>
        </div>
    </div>
</form>
@endsection