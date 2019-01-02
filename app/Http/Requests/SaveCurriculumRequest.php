<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveCurriculumRequest extends FormRequest
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
            'titulo' => 'required|max:100',
            'acerca' => 'required',
            'mensaje_contacto' => 'required|max:191',
            'icono.*' => 'nullable|url'
        ];

        if ($this->get('banner'))
        {
            $rules = array_merge($rules, ['banner'=>'mimes:jpg,jpeg,png']);
        }

        return $rules;
    }
}
