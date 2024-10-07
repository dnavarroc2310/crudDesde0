<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teams;

class TeamsController extends Controller
{
    public function index()
    {
        $teams = Teams::all();
        return view('teams.index', ['teams' => $teams]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teams.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datosTeams = request()->except('_token');
        Teams::create($datosTeams);
        return redirect('/teams')->with('mensaje', 'Equipo agregado con éxito');
    }

    /**
     * Display the specified resource`
     */
    public function show(Teams $teams)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $teams = Teams::findOrFail($id);
        return view('teams.edit', compact('teams'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Obtén los datos excepto los campos de protección _token y _method
        $datosTeams = request()->except(['_token', '_method']);

        // Actualiza los datos del equipo con el ID proporcionado
        Teams::where('id', '=', $id)->update($datosTeams);

        // Redirige a la vista de los equipos, mostrando un mensaje de éxito
        return redirect('/teams')->with('mensaje', 'Equipo actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //elimina al empleado por el ID
        Teams::destroy($id);
        //retornar a la vista de empleados
        return redirect('teams');
    }

}
