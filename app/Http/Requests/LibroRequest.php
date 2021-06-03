<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class LibroRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

          'categoria_id' => 'required',
          'estado_id'=>'required',
          'titulo'=> 'required|min:15',
          'image' => 'image.jpg',
          'autor'=> 'required|min:15',
          'cod_libro'=>'bail|required|unique:libros|max:255',
          'pais'=>'required|min:15',
          'año'=>'required|date|before_or_equal:today',
          'editorial'=>'required|min:15',
          'edicion'=>'required|min:15',
          'cantidad'=>'required'

        ];
    }

    public function messages()
    {
        return [
           'categoria_id.required' => 'Es necesario seleccionar una Categoría a la cual pertenecera el libro.',
           'estado_id.required' => 'Es necesario selecionar un Estado para el libro.',
           'titulo.required' => 'Es necesario ingresar un Titulo para el libro.',
           'titulo.min' => 'El titulo debe de tener al menos 15 caracteres.',
           'autor.required' => 'Es necesario ingresar un Autor para el libro.',
           'autor.min' => 'El autor debe de tener al menos 15 caracteres.',
           'cod_libro.required' => 'Es necesario ingresar el Código de identificación del libro.',
           'pais.required' => 'Es necesario ingresar el País de procedencia del libro.',
           'año.required' => 'Es necesario ingresar la Fecha de emisión del libro.',
           'editorial.required' => 'Es necesario ingresar la Editorial del libro.',
           'edicion.required' => 'Es necesario ingresar la Edición del libro.',
           'cantidad.required' => 'Es necesario ingresar la Cantidad de unidades que posee de este ejemplar.',

        ];
    }
}
