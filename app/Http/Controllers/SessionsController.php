<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(auth()->attemps($attributes)){
            session()->regenerate();
            return redirect('/')->with('success', 'Welcome back!')
        }

        throw ValidationException::withMessages([
            'error' => 'Your provided credentials could not be verified.'
        ]);
    }
    
    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'Goodbye!');
    }
}
