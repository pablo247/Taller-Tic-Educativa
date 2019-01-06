<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUsuarioResquest extends FormRequest
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
            'nombre' => 'required|max:191',
            'apellido' => 'required|max:191',
            'correo' => 'required|unique:usuario,correo,'.$this->route()->usuario.'|max:100|email',
            'rol' => 'required|in:editor,super usuario',
            'usuario' => 'required|unique:usuario,usuario,'.$this->route()->usuario.'|max:100',
        ];


        if ($this->get('password'))
        {
            $rules = array_merge($rules, ['password' => 'required|max:191']);
        }

        if ($this->get('foto_perfil'))
        {
            $rules = array_merge($rules, ['foto_perfil' => 'mimes:jpg,jpeg.png']);
        }

        return $rules;
    }
}
