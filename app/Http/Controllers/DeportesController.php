<?php

namespace App\Http\Controllers;

use App\Deporte;
use App\User;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class DeportesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deportes = Deporte::orderBy('id', 'ASC')->paginate(4);
        $deportes->each(function ($deportes) {
            $deportes->user;

        });

        $user = User::orderBy('name', 'ASC')->pluck('name', 'id');

        return view('control.deportes.index')
            ->with('deportes', $deportes)
            ->with('user', $user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

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
        if ($request->hasFile('imagen')) {

            $imagen = $request->file("imagen");

            $nombre = time() . $imagen->getClientOriginalName();

            $moverA = public_path() . '/imagenes/deportes/';
            $imagen->move($moverA, $nombre);
        }

        $deporte = new Deporte($request->All());

        if ($request->hasFile('imagen')) {
            $deporte->imagen = $nombre;
        }

        $deporte->save();
        Flash::success("Se creo el nuevo deporte: " . $deporte->name);
        return redirect('/control/deportes');
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
        $deporte = Deporte::find($id);
        $deporte->User;
        $user = User::orderBy('name', 'ASC')->pluck('name', 'id');
        return view('control.deportes.edit')
            ->with('deporte', $deporte)
            ->with('user', $user);
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
        $deporte = Deporte::find($id);
        $img     = $deporte->imagen;

        if ($request->hasFile('imagen')) {

            $imagen = $request->file("imagen");

            $nombre = time() . $imagen->getClientOriginalName();

            $moverA = public_path() . '/imagenes/deportes/';
            $imagen->move($moverA, $nombre);
        }

        $deporte->fill($request->all());

        if ($request->hasFile('imagen')) {
            $deporte->imagen = $nombre;
        } else {
            $deporte->imagen = $img;
        }
        $deporte->save();
        Flash::warning("El Deporte " . $deporte->name . " fuen modificado de forma exitosa");
        return redirect('/control/deportes');
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
