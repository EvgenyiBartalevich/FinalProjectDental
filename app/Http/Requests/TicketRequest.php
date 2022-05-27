<?php

namespace App\Http\Requests;

use Faker\Provider\Lorem;
use Illuminate\Foundation\Http\FormRequest;

class TicketRequest extends FormRequest
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
            'name'      =>'required|min:2|max:15',
            'phone'     =>'required|min:7|numeric',
            'email'     =>'required|email',
            'deparment' =>'required',
            'doc'       =>'required',
            'gender'    =>'required',
            'date'      =>'required|date',
            'time'      =>'required',
            'comment'   =>'max:250',
        ];
    }
}
