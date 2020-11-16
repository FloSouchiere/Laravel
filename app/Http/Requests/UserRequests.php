<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequests extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'email' => 'required|email|max:80',
            'password' => 'required|string',
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'phone' => 'nullable|numeric',
            'address_line_1' => 'required|string|',
            'address_line_2' => 'nullable|string|',
            'zipcode' => 'required|numeric',
            'city' => 'required|string|',
        ];
    }
}
