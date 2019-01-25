<?php

namespace App\Http\Controllers;

use App\Deporte;
use App\Deportista;
use App\Institucion;
use App\Tipo;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class DeportistasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deportistas = Deportista::orderBy('id', 'ASC')->paginate(4);
        $deportistas->each(function ($deportistas) {
            $deportistas->tipo;
            $deportistas->institucion;
            $deportistas->deporte;
        });
        $tipos = Tipo::orderBy('id', 'ASC')->pluck('tipo', 'id');

        return view('control.deportistas.index')
            ->with('deportistas', $deportistas)->with('tipos', $tipos);
    }

    public function seleccion(Request $request, $id)
    {

        if ($request->ajax()) {
            $deportistas = Deportista::where('tipo_id', '=', $id)->get();
            $deportistas->each(function ($deportistas) {
                $deportistas->institucion;
                $deportistas->deporte;
            });
            return response()->json($deportistas);
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $deportes      = Deporte::orderBy('name', 'ASC')->pluck('name', 'id');
        $instituciones = Institucion::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        $tipos         = Tipo::orderBy('id', 'ASC')->pluck('tipo', 'id');
        return view('control.deportistas.create')
            ->with('deportes', $deportes)
            ->with('instituciones', $instituciones)
            ->with('tipos', $tipos);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $deportista = new Deportista($request->All());
        $deportista->save();
        Flash::success("Los datos de: " . $deportista->nombre . " se guardaron de forma exitosa");
        return redirect('/control/deportistas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $deportista = Deportista::find($id);
        $deportista->each(function ($deportista) {
            $deportista->tipo;
            $deportista->institucion;
            $deportista->deporte;

        });

        $deportes      = Deporte::orderBy('name', 'ASC')->pluck('name', 'id');
        $instituciones = Institucion::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        $tipos         = Tipo::orderBy('tipo', 'ASC')->pluck('tipo', 'id');

        return view('control.deportistas.edit')
            ->with('deportista', $deportista)
            ->with('deportes', $deportes)
            ->with('instituciones', $instituciones)
            ->with('tipos', $tipos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $deportista = Deportista::find($id);
        $deportista->fill($request->all());
        $deportista->save();
        Flash::warning("Los datos del deportista " . $deportista->nombre . " fueron modificados de forma exitosa");
        return redirect('/control/deportistas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $deporte = Deporte::find($id);
        $deporte->delete();
        Flash::error("Se eliminó el deporte" . $deporte->name);
        return redirect('/control/deportes');
    }
}
