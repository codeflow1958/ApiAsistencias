<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Alumno::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $alumno = new Alumno();

        if ($alumno != null) {
            $alumno->nombre = $request->nombre;
            $alumno->apellido = $request->apellido;
            $alumno->tel = $request->tel;
            $alumno->save();
            return "el alumno se guardo correctamente";
        }

        return "no existe el alumno";
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        if (Alumno::find($id) != null) {
            return Alumno::find($id);
        }

        return "no existe el alumno";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumno $alumno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $alumno = Alumno::find($id);

        if ($alumno != null) {
            $alumno->nombre = $request->nombre;
            $alumno->apellido = $request->apellido;
            $alumno->tel = $request->tel;
            $alumno->save();
            return "el alumno se actualizo correctamente";
        }

        return "no existe el alumno ";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $alumno = Alumno::find($id);
        $alumno->delete();
        return "el alumno fue eliminado";
    }
}
