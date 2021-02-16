<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Cliente;
use App\Libro;
use App\Prestamo;
use App\Categorias;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {


        $pres = Prestamo::count();
        $cliente = Cliente::count();
        $cantidad = Libro::count();
        $categoria = Categorias::count();
        return view('home', compact('cantidad', 'cliente', 'pres', 'categoria'));
    }
}
