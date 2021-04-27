<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteF extends FormRequest
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
            
            'proceso'=>'required|max:30',
            'subproceso'=>'required|max:30',
            'actividad'=>'required|max:30',
            'sedes'=>'required|max:30',
            'maquina'=>'required|max:30',
            'bodega'=>'required|max:30',
            'empleado'=>'required|max:30',
            'cargo'=>'required|max:30',
            'area'=>'required|max:30',
            'procesoempleado'=>'required|max:30',
            'email'=>'required|max:30',
            'telefono'=>'required|max:30',

        ];
    }
}
