<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PreguntasRequest extends FormRequest
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
            'categoria_pregunta' => 'required|not_in:0',
            'tipos_respuesta' => 'required|not_in::0',
            'texto_pregunta' => 'required|string|min:10'
        ];
    }
}
