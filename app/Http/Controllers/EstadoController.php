<?php

namespace App\Http\Requests\EstadoRequest;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estado;
use App\Http\Requests\EstadoRequest;



class EstadoController extends Controller
  {
    public function index()
  {
      $estados = Estado::orderBy('id', 'asc')->get();
      return view('estados.index', compact('estados'));
  }

  public function crear()
  {
      return view('estados.crear');
  }


  public function guardar(EstadoRequest $request)
  {
      Estado::create($request->all());
      return redirect()->route('estados')->with(['message' => 'Estado creado exitosamente']);
  }

  public function actualizar(EstadoRequest $request, Estado $estados)
  {
      $estados->update($request->all());
      return redirect()->route('estados')->with('message', 'Estado modificado exitosamente.');
  }
}
