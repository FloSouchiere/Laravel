<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'firstname' => 'required|string',
            'name' => 'required|string',
            'email' => 'required|email|max:80',
            'password' => 'required|string',
            'phone' => 'nullable|string',
            'address_line_1' => 'required|string|',
            'address_line_2' => 'nullable|string|',
            'zipcode' => 'required|string',
            'city' => 'required|string|',
        ];
    }
}
