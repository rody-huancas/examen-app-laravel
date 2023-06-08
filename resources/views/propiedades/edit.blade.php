@extends('layouts.app')

@section('content')
<form action="{{route('propiedad.update', $propiedad->id)}}" method="POST" class="property-form">
    <h2 class="subtitle">Editar</h2>
    @csrf
    @method('PUT')
    <div class="property-form__row">
        <div class="property-form__col">
            <div class="property-form__group">
                <label for="nombre" class="property-form__label">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="property-form__input" placeholder="Ingrese el nombre" value="{{$propiedad->nombre}}">
            </div>
            <div class="property-form__group">
                <label for="direccion" class="property-form__label">Dirección</label>
                <input type="text" name="direccion" id="direccion" class="property-form__input" placeholder="Ingrese el direccion" value="{{$propiedad->direccion}}">
            </div>
            <div class="property-form__group">
                <label for="caracteristicas" class="property-form__label">Características</label>
                <input type="text" name="caracteristicas" id="caracteristicas" class="property-form__input" placeholder="Ingrese el características" value="{{$propiedad->caracteristicas}}">
            </div>
        </div>
        <div class="property-form__col">
            <div class="property-form__group">
                <label for="estado" class="property-form__label">Estado</label>
                <input type="text" name="estado" id="estado" class="property-form__input" placeholder="Ingrese el estado" value="{{$propiedad->estado}}">
            </div>
            <div class="property-form__group">
                <label for="precio" class="property-form__label">Precio Alquiler</label>
                <input type="number" name="precio" id="precio" class="property-form__input" placeholder="Ingrese el precio" value="{{$propiedad->precioalquiler}}">
            </div>
        </div>
    </div>
    <div class="property-form__group">
        <button type="submit" class="property-form__button property-form__button--success">Guardar</button>
        <a href="{{route('inicio')}}" class="property-form__button property-form__button--default">Cancelar</a>
    </div>
</form>
@endsection
