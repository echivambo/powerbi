<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FranquiaRequest extends FormRequest
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
            'user_id'=>'required|integer',
            'province'=>'required|string|max:100',
            'districts'=>'required|string|max:100',
            'nome'=>'required|string|min:6|max:100|unique:franquias1',
        ];
    }
}

