<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DeportistaRequest extends FormRequest
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
            //
            'telefono' => 'max:99999999',
            'edad'     => 'min:1|max:2',
            'cedula'   => 'max:16|unique:deportistas',

        ];
    }
}
