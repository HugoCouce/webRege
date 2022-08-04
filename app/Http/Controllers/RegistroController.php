<?php

namespace App\Http\Controllers;

use App\Models\Registro;
use Illuminate\Http\Request;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['registros'] = Registro::paginate(10);
        return view('registro.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('registro.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosRegistro = request()->except('_token');
        Registro::insert($datosRegistro);
        return redirect('registro')->with('mensaje', 'Registro agregado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\regisro  $registro
     * @return \Illuminate\Http\Response
     */
    public function show(Registro $registro)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $registro = Registro::findOrFail($id);

        return view('registro.edit', compact('registro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosRegistro = request()->except(['_token', '_method']);
        Registro::where('id', '=', $id)->update($datosRegistro);

        $registro = Registro::findOrFail($id);

        return view('registro.edit', compact('registro'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Registro::destroy($id);
        return redirect('registro');
    }
}
