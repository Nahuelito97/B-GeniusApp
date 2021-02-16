<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PrestamoRequest extends FormRequest
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
          'cliente_id' => 'required',
          'libro_id'=>'required',
        ];
    }

    public function messages()
    {
      return [
        'cliente_id.required' => 'Es necesario seleccionar un Cliente para poder crear un Prestamo.',
        'libro_id.required' => 'Es necesario selecionar un Libro para poder crear un Prestamo.',
      ];
    }
}
