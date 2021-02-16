<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
namespace App\Http\Controllers;


use App\Http\Controllers\Controller;

use App\Cliente;
use App\Http\Requests\ClienteRequest;
use Symfony\Component\HttpFoundation\Request;

class ClienteController extends Controller
{
  public function index(Request  $request)
  {
      $nombre = $request->get('buscarpor');


      $clientes = Cliente::whereBorrado(0)->where('nombre', 'like', "%$nombre%")->paginate(50);
      return view('clientes.index', ['clientes' => $clientes]);
  }


  public function crear()
  {
      return view('clientes.crear');
      return back()->with(['message', 'Cliente creado con exito!']);

  }


  public function guardar(ClienteRequest $request)
  {
      Cliente::create($request->all());
      return back()->with(['message', 'Cliente creado con exito!']);
  }

  public function editar(Cliente $cliente) {
    // se retorna la vista del formulario para editar a un Cliente
    return view('clientes.editar', compact('cliente'));
  }



  public function actualizar(ClienteRequest $request, Cliente $cliente )
  {
      dd($request->all());
      $cliente->update ($request->all());
      return redirect()->route('clientes')->with('message', 'Cliente modificado exitosamente.');
  }



  public function borrar (Cliente $cliente){

    $cliente->update([
        'borrado' => 1,
    ]);
    return redirect()->route('clientes')->with('notification', ' Cliente Eliminado correctamente');
  }
}
