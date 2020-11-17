<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use App\Http\Requests\UpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Models\User;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('users.index', ['users' => $users]);
        //
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(StoreRequest $storeRequest)
    {
        $user = new User;
        $user->firstname = $storeRequest->firstname;
        $user->lastname = $storeRequest->lastname;
        $user->email = $storeRequest->email;
        $user->password = $storeRequest->password;
        $user->phone = $storeRequest->phone;
        $user->address_line_1 = $storeRequest->address_line_1;
        $user->address_line_2 = $storeRequest->address_line_2;
        $user->zipcode = $storeRequest->zipcode;
        $user->city = $storeRequest->city;

        $user->save();

        return redirect()->route('users.index');
    }

    public function show(User $user)
    {
        return view('users.show', ['user' => $user]);
    }

    public function edit(User $user)
    {
        return view('users.edit', ['user' => $user]);
    }

    public function update(User $user, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'firstname' => ['required', 'max:80', 'string'],
            'lastname' => ['required', 'max:80', 'string'],
            'email' => ['required', 'max:80', 'email', Rule::unique('users')->ignore($user->id)],
            'password' => ['required', 'max:255', 'string'],
            'phone' => ['required','min:8', 'max:12', 'string'],
            'address' => ['required', 'max:80', 'string'],
            'addressComp' => ['nullable','max:80', 'string', ],
            'zipcode' => ['required', 'max:5', 'string'],
            'city' => ['required', 'max:80', 'string'],

        ]);
        $user->update($request->all());

        return redirect()->route('users.index');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect('/');
    }
}
