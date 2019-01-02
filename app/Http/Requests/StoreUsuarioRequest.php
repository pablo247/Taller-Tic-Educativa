<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUsuarioRequest extends FormRequest
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
            'nombre' => 'required|max:191',
            'apellido' => 'required|max:191',
            'correo' => 'required|unique:usuario,correo|max:100|email',
            'usuario' => 'required|unique:usuario,usuario|max:100',
            'password' => 'required|max:191',
        ];

        if ($this->get('foto_perfil'))
        {
            $rules = array_merge($rules, ['foto_perfil' => 'mimes:jpg,jpeg.png']);
        }

        return $rules;
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        // Agregar los mensaje personalizados para todos los campos
        return [
            'correo.unique'  => 'El correo ya esta en uso.',
            'usuario.unique' => 'El usuario ya esta en uso.',
        ];
    }
}
