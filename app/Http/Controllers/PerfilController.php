<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
        $user = User::find($id);

        return view('control.users.perfil')->with('user', $user);
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

        if ($request->hasFile('imagen')) {

            $imagen = $request->file("imagen");

            $nombre = time() . $imagen->getClientOriginalName();

            $ruta = public_path() . '/imagenes/usuarios/';
            $imagen->move($ruta, $nombre);

        }

        $user     = User::find($id);
        $img      = $user->imagen;
        $password = $user->password;

        $user->fill($request->all());
        if ($request->hasFile('imagen')) {

            $user->imagen = $nombre;

        } else {

            $user->imagen = $user->imagen;
        }

        if (Hash::check($request->input("password"), $hashedPassword)) {
            $user->password = bcrypt($request->input("newpassword"));

            $user->save();
            Flash::success("Los datos se guardaron de forma exitosa: " . $user->name)->important();
            return redirect('/');

        } else {
            flash('No se pudieron guardar sus datos ' . $user->name)->error()->important();
            return redirect('/');

        }
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
    }
}
