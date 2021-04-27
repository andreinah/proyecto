<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AplicacionesF extends FormRequest
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
           'nombre'=>'required|max:30',
           'fpago'=>'required',
           'ndocumentos'=>'required|max:30',
           'nalmacenamiento'=>'required|max:30',
           'nempleados'=>'required|max:30'
       

        ];
    }
}
