<?php

namespace App\Http\Controllers;

use App\Http\Requests\SessionsRequest;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.login');
    }

    public function store(SessionsRequest $request)
    {
        $attributes = [
            'email' => $request->validated()['email'],
            'password' => $request->validated()['password'],
        ];

        if (auth()->attempt($attributes)) {
            session()->regenerate();
            return redirect('/')->with('success', 'You are logged in!');
        }

        return back()->with(['error' => 'The provided credentials could not be verified']);
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'Goodbye!');
    }
}
