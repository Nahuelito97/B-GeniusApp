<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true ;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre'=>'required|min:10',
            'apellido'=>'required|min:10',
            'direccion'=>'required|min:15',
            'fechanacimiento'=>'required|date|before_or_equal:today',
            'telefono'=>'bail|required|unique:clientes|max:10',
            'correoelectronico'=>'required|unique',
        ];
    }

    public function messages()
    {
        return [
          'nombre.required' => 'Es necesario ingresar un Nombre para el cliente.',
          'nombre.min' => 'El nombre del Cliente debe de tener 10 caracteres.',
          'apellido.required' => 'Es necesario ingresar un Apellido para el cliente.',
          'apellido.min' => 'El apellido del Cliente debe de tener 10 caracteres.',
          'direccion.required' => 'Es necesario ingresar una Dirección para el cliente.',
          'direccion.min' => 'La dirección debe de tener 15 caracteres.',
          'fechanacimiento.required' => 'Es necesario seleccionar una Fecha de Nacimiento para el cliente.',
          'telefono.required' => 'Es necesario ingresar un número de Teléfono.',
          'correoelectronico.required' => 'Es necesario ingresar un Correo Electronico para el cliente.',

        ];
    }
}
