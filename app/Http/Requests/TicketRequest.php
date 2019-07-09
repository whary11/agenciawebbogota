<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TicketRequest extends FormRequest
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
            'remitente' => 'required',
            'email' => 'required',
            'mensaje' => 'required',
            'telefono' => 'required'

        ];
    }

    public function messages()
    {
        return [
            'remitente.required' => 'Debe haber un remitente',
            'email.required' => 'Debe escribir un correo',
            'mensaje.required' => 'Debe escribir un mensaje',
            'telefono.required' => 'Debe escribir un telefono',

        ];
    }
}
