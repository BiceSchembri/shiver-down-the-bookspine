<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Requests\UserRequest;
use App\Models\User;

class UserController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    public function show()
    {
        $users = User::all();
        return view('users', ['users' => $users]);
    }

    public function showDetail(User $user)
    {
        return view('user', ['user' => $user]);
    }

    public function register()
    {
        return view('register');
    }

    public function store(UserRequest $request)
    {
        $firstname = $request->validated()['firstname'];
        $lastname = $request->validated()['lastname'];
        $username = $request->validated()['username'];
        $email = $request->validated()['email'];
        $password = $request->validated()['password'];

        $user = new User;
        $user->firstname = $firstname;
        $user->lastname = $lastname;
        $user->username = $username;
        $user->email = $email;
        $user->password = $password;
        $user->save();

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
