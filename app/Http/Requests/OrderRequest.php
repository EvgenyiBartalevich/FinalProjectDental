<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'user_name'   =>'required|min:2|max:20',
            'user_phone'  =>'required|min:7|numeric',
            'email'       =>'required|email',
            'message'     =>'nullable|min:0|max:250',
        ];
    }
}
