@extends('layouts.app')

@section('content')
<form action="{{route('propiedad.store')}}" method="POST">
    @csrf
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingrese el nombre">
                <label for="nombre">Dirección</label>
                <input type="text" name="direccion" id="direccion" class="form-control" placeholder="Ingrese el direccion">
                <label for="nombre">Caracteriticas</label>
                <input type="text" name="caracteristicas" id="caracteristicas" class="form-control" placeholder="Ingrese el caracteristicas">
                <label for="nombre">Estado</label>
                <input type="text" name="estado" id="estado" class="form-control" placeholder="Ingrese el estado">
                <label for="nombre">Precio Alquiler</label>
                <input type="text" name="precio" id="precio" class="form-control" placeholder="Ingrese el precio">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Guardar</button>
                <a href="{{route('inicio')}}" class="btn btn-default">Cancelar</a>
            </div>
        </div>
    </div>
</form>
@endsection