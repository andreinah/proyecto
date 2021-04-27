<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MclientesF extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'fecha'=>'required|max:30',
            'logo'=>'required|max:30',
            'nit'=>'required|max:30',
            'rsocial'=>'required|max:30',
            'empresa'=>'required|max:30',
            'actividad'=>'required|max:30',
            'direccion'=>'required|max:30',
            'url'=>'required|max:30',
            'telefono'=>'required|max:30',
            'sector'=>'required|max:30',
            'subsector'=>'required|max:30',
            'pais'=>'required|max:30',
            'departamento'=>'required|max:30',
            'ciudad'=>'required|max:30',
            'barrio'=>'required|max:30',
            'nempleados'=>'required|max:30',
            'contacto'=>'required|max:30',
            'tlfcontacto'=>'required|max:30',
            'email'=>'required|max:30',
            'asesor'=>'required|max:30',
            'plazo'=>'required|max:30',
            'cupo'=>'required|max:30',
            'estado'=>'required|max:30',
            'usuario'=>'required|max:30',
            'pass'=>'required|max:30',
        ];
    }
}
