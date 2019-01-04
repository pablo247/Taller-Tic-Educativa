<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class UpdateArticuloRequest extends FormRequest
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
        $rules =  [
            'titulo' => 'required|max:191',
            'alias' => 'required|max:191',
            'introduccion' => 'required|max:700',
            'contenido' => 'required',
            'fecha_publicacion' => 'required|date_format:"d-m-Y"',
        ];

        if (Auth::user()->rol == 'super usuario') $rules['publicado'] = 'required|boolean';

        if ($this->file('imagen')) $rules['publicado'] = 'required|mimes:jpg,jpeg,png';

        return $rules;
    }
}
