<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticuloRequest extends FormRequest
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
            'titulo' => 'required|max:191',
            'alias' => 'required|max:191',
            'imagen' => 'required|mimes:jpg,jpeg,png',
            'introduccion' => 'required|max:700',
            'contenido' => 'required',
            'publicado' => 'required|boolean',
            'fecha_publicacion' => 'required|date_format:"d-m-Y"',
        ];
    }
}
