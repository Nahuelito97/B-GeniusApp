<?php

namespace App\Http\Controllers;

use App\Categorias;
use App\Estado;


use App\Http\Requests\LibroRequest;


use App\Libro;
use Symfony\Component\HttpFoundation\Request;


class LibroController extends Controller
{
  public function index(Request $request)
  {   //flitrado por Categorias

    $titulo = $request->get('buscarpor');

    $categorias= Categorias::orderBy('nombre','asc')->get();
    $categoria=null;

    //filtro para Estados
    $estados= Estado::orderBy('descripcion','asc')->get();
    $estado=null;

    $consulta=Libro::select('libros.*');
    if($request->categoria_id!=null){
      $consulta=$consulta->whereCategoria_id($request->categoria_id);
      $categoria=Categorias::find($request->categoria_id);
    } //categorias

    if($request->estado_id!=null){
      $consulta=$consulta->whereEstado_id($request->estado_id);
      $estado=Estado::find($request->estado_id);
    }

    $libros = $consulta->whereBorrado(0)->where('titulo', 'like', "%$titulo%")->paginate(6);
    //retorno la vista
    return view('libros.index', compact('libros', 'categorias', 'categoria', 'estados', 'estado'));
  }



  public function crear()
  {
      /*lista todas las categorias y estados*/
      $categorias = Categorias::all();
      $estados = Estado::all();

      return view('libros.crear', compact('categorias', 'estados', 'pais'));
  }



  public function guardar(LibroRequest $request)
  {
      Libro::create($request->all());
      return redirect()->route('libros')->with(['message' => 'Libro guardado']);

      //controles para subir la imagen
  }

  public function editar(Libro $libro) {
    // se retorna la vista del formulario para editar a un Cliente
    return view('libros.editar', compact('libro'));
  }

  public function actualizar(LibroRequest $request, Libro $libro)
  {
      $libro->update($request->all());
      return redirect()->route('libros')->with(['message', 'Libro Modificado']);
  }

  public function borrar (Libro $libro){

    $libro->update([
        'borrado' => 1,
    ]);
    return redirect()->route('libros')->with('notification', ' Libro Eliminado correctamente');
  }
}
