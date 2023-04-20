<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Requests\UserRequest;
use App\Models\User;

class UserController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    // public function show()
    // {
    //     $users = User::all();
    //     return view('users.users', ['users' => $users]);
    // }

    // public function showDetail(User $user)
    // {
    //     return view('users.user', ['user' => $user]);
    // }

    public function create()
    {
        return view('users.register');
    }

    public function store(UserRequest $request)
    {
        $attributes = [
            'firstname' => $request->validated()['firstname'],
            'lastname' => $request->validated()['lastname'],
            'username' => $request->validated()['username'],
            'email' => $request->validated()['email'],
            'password' => $request->validated()['password'],
        ];

        $user = User::create($attributes);

        auth()->login($user);

        return redirect('/')->with('success', 'You registered successfully');
    }

    // public function delete(User $user)
    // {
    //     //
    // }

    // public function edit(User $user)
    // {
    //     //
    // }

    // public function update(User $user)
    // {
    //     //
    // }
}
