<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class SearchController extends Controller
{
    public function show(Request $request)
    {
    	$query = $request->input('query');
    	$clientes = Cliente::where('nombre', 'like', "%$query%")->paginate(5);

    	if ($clientes->count() == 1) {
    		$id = $clientes->first()->id;
    		return redirect("clientes/$id"); // 'Clientes/'.$id
    	}

    	return view('search.show')->with(compact('clientes', 'query'));
    }

    public function data()
    {
    	$clientes = Cliente::pluck('name');
    	return $clientes;
    }
}
