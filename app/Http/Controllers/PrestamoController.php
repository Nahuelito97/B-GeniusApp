<?php

use Illuminate\Http\Request;
namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Cliente;
use App\Prestamo;
use App\Libro;

use App\Http\Requests\PrestamoRequest;

use Symfony\Component\HttpFoundation\Request;

class PrestamoController extends Controller
{
      public function index(Request $request)
        {
          $prestamos=Prestamo::orderBy('id', 'asc')->get();
          return view('prestamos.index', compact('prestamos'));
        }

    public function crear()
        {
          //lista todos los libros y clientes registrados
          $libros=Libro::where('cantidad','>',0)->get();
          $clientes = Cliente::all();
          return view('prestamos.crear', compact('libros', 'clientes'));
        }

    public function guardar(PrestamoRequest $request)
        {   $fechaEntrega=Carbon::now()->toDateString();
            $fechaDevolucion = Carbon::parse($fechaEntrega)->addDays(30)->toDateString();
            $prestamo = Prestamo::create([
                'cliente_id'=>$request->cliente_id,
                'libro_id'=>$request->libro_id,
                'fecha_entrega'=>$fechaEntrega,
                'fecha_devolucion'=>$fechaDevolucion,
                'condicion'=>0,
            ]);
            Libro::whereId($request->libro_id)->decrement ('cantidad',1);

            return redirect()->route('prestamos')->with(['message' => 'Libro guardado']);

        }

        public function actualizar(Prestamo $prestamo )
        {
            $prestamo->update(['condicion'=>1]);

            return redirect()->route('prestamos')->with('message', 'Prestamo modificado exitosamente.');
        }


}
