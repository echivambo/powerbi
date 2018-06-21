<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PromotorRequest extends FormRequest
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
            'provincia' => 'required|string|min:4',
            'franquia' => 'required|string|max:100',
            'nome' => 'required|string|min:6|max:60|unique:promotores',
            'contacto' => 'required|string|min:9|max:15',
            'codigo' => 'string|unique:promotores',
        ];
    }
}
