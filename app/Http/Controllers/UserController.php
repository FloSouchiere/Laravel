<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequests;
use App\Models\User;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        foreach ($users as $user) {
            echo $user->name;
        }
    }

    public function create()
    {
        return view('register');
    }

    public function store(UserRequests $request)
    {
        User::create($request->all());

        return "Well Done !";
    }

    public function show(UserRequests $user)
    {
        echo 'Nom :' . $user->firstname . '<br>';
        echo 'Email :' . $user->email . '<br>';
    }

    public function edit(User $user)
    {
        return view('edit', compact('user'));
    }

    public function update(UserRequests $request, User $user)
    {
        $user->update($request->all());
        return "Utilisateur modifié avec succès!";
    }


    public function destroy(User $user)
    {
        try {
            $user->delete();
        } catch (\Exception $e) {
        }
        return 'Bye Bye!';
    }
}
