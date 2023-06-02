<?php

namespace App\Http\Controllers;

use App\Models\Propiedad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PropiedadController extends Controller
{
    public function index(Request $request)
    {
        $propiedad = Propiedad::all();

        return view('propiedades.index', ['propiedad' => $propiedad]);
    }

    public function create()
    {
        return view('propiedades.create');
    }

    public function store(Request $request)
    {
        $registro = new Propiedad();
        $registro->nombre = $request->input('nombre');
        $registro->direccion = $request->input('direccion');
        $registro->caracteristicas = $request->input('caracteristicas');
        $registro->estado = $request->input('estado');
        $registro->precioalquiler = $request->input('precio');
        $registro->save();
        return redirect()->route('inicio')->with('mensaje', 'Registro Existos');
    }

    public function edit($id)
    {
        $propiedad = Propiedad::findOrFail($id);

        return view('propiedades.edit', ['propiedad' => $propiedad]);
    }

    public function update(Request $request, Propiedad $propiedad)
    {
        $propiedad->nombre = $request->input('nombre');
        $propiedad->direccion = $request->input('direccion');
        $propiedad->caracteristicas = $request->input('caracteristicas');
        $propiedad->estado = $request->input('estado');
        $propiedad->precioalquiler = $request->input('precio');

        $propiedad->save();

        return redirect()->route('inicio')->with('success', 'Propiedad actualizada correctamente.');
    }


    public function destroy($id)
    {
        $propiedad = Propiedad::findOrFail($id);
        $propiedad->delete();

        return redirect()->route('inicio')->with('mensaje', 'Registro Existos');
    }
}
