<?php

namespace App\Http\Controllers;

use App\Institucion;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class InstitucionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $instituciones = Institucion::orderBy('id', 'ASC')->paginate(4);
        return view('control.instituciones.index')
            ->with('instituciones', $instituciones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $institucion = new Institucion($request->All());
        $institucion->save();
        Flash::success("Se agregó una nueva institucion: " . $institucion->nombre);
        return redirect('/control/instituciones');
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
        $institucion = Institucion::find($id);

        return view('control.instituciones.edit')
            ->with('institucion', $institucion);
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
        $institucion = Institucion::find($id);
        $institucion->fill($request->all());
        $institucion->save();
        Flash::warning("La institucion " . $institucion->nombre . " fuen modificada recientemente");
        return redirect('/control/instituciones');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $institucion = Institucion::find($id);
        $institucion->delete();
        Flash::error("Se eliminó la institucion " . $institucion->nombre);
        return redirect('/control/instituciones');
    }
}
