<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teams;

class TeamsController extends Controller
{
    public function index()
    {
        $teams = Teams::all();
        return view('index', ['teams' => $teams]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teams.from');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $datosEmpleados = request()->all();
        $datosEmpleados = request()->except('_token');
        //Agregar una imagen
        // if(request(->hasFile('Foto')){
        //     $datosEmpleados['Foto'] = request()->file('Foto')->store('uploads', 'public');
        // }
        //Insertar datos en la tabla empleados
        Empleado::insert($datosEmpleados);
    }

    /**
     * Display the specified resource`
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $empleado = Empleado::findOrFail($id);
        return view('empleado.edit', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        $datosEmpleados = request()->except(['_token', '_method']);
        Empleado::where('id', '=', $id)->update($datosEmpleados);

        $empleado = Empleado::findOrFail($id);
        return view('empleado.edit', compact('empleado'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //elimina al empleado por el ID
        Empleado::destroy($id);
        //retornar a la vista de empleados
        return redirect('empleado');
    }

}
