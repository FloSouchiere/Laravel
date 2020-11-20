<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    public function create(array $input)
    {
        Validator::make($input, [
            'firstname'=>['required', 'string','max:225'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'phone'=> ['required','string', 'max:12'],
            'address_line_1'=> ['required', 'string', 'max:255'],
            'address_line_2'=>['string', 'max:200'],
            'zipcode'=>['required', 'string', 'max:10'],
            'city'=>['required', 'string', 'max:50']
        ])->validate();

        return User::create([
            'firstname' => $input['firstname'],
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'phone' => $input['phone'],
            'address_line_1' => $input['address_line_1'],
            'address_line_2' => $input['address_line_2'],
            'zipcode' => $input['zipcode'],
            'city' => $input['city'],
        ]);
    }
}
