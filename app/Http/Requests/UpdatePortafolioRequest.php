<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePortafolioRequest extends FormRequest
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
        $rules = [
            'url' => 'required|max:191|url',
            'descripcion' => 'required'
        ];

        if ($this->file('imagen'))
        {
            $rules['imagen'] = 'required|mimes:jpg,jpeg,png';
        }

        return $rules;
    }
}
