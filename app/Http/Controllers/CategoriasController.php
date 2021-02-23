<?php

namespace App\Http\Requests\CategoriasRequest;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorias;

use App\Http\Requests\CategoriasRequest;

class CategoriasController extends Controller
{
  public function index()
  {
      $categorias = Categorias::orderBy('id', 'asc')->paginate(50);
      return view('categorias.index', compact('categorias'));
  }

  public function crear()
  {

      return view('categorias.crear');
  }

  public function guardar(CategoriasRequest $request){

      Categorias::create($request->all());
      return redirect()->route('categorias.crear')->with(['message' => 'Categoria creada exitosamente']);
  }

  public function actualizar(CategoriasRequest $request, Categorias $categorias)
  {
      $categorias->update($request->all());
      return redirect()->route('categorias')->with('message', 'Categoria modificado exitosamente.');
  }
}
