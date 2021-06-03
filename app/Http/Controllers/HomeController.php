<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\Libro;
use App\Prestamo;
use App\Categorias;
use App\Estado;

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
        $libritos = Libro::count();

        $categoria = Categorias::count();


        $titulo = $request->get('buscarpor');


        $consulta = Libro::select('libros.*');
        if ($request->categoria_id != null) {
            $consulta = $consulta->whereCategoria_id($request->categoria_id);
            $categoria = Categorias::find($request->categoria_id);
        } //categorias

        if ($request->estado_id != null) {
            $consulta = $consulta->whereEstado_id($request->estado_id);
            $estado = Estado::find($request->estado_id);
        }

        $libros = $consulta->whereBorrado(0)->where('titulo', 'like', "%$titulo%")->paginate(15);
        return view('home', compact('libritos', 'cliente', 'pres', 'categoria','libros'));
    }
}
