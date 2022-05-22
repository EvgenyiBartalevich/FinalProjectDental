<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FreeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; //false - если не авторизован - ничего не отправить.
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:2|max:15',
            'phone'  => 'required|min:7|numeric',
        ];
    }
}
