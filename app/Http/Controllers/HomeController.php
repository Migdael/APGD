<?php

namespace App\Http\Controllers;

use App\Deporte;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    protected $dep = "variable";
    public function index()
    {

        $deportes = Deporte::orderBy('id', 'ASC')->paginate(8);
        $deportes->each(function ($deportes) {
            $deportes->user;
        });

        return view('index')
            ->with('deportes', $deportes);

// $deportistas = Deportista::get()->where('deporte_id', $deportes->id)->count();
    }

}
