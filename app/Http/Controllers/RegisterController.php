<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'name' => 'required|max:255',
                'username' => ['required', 'min:3', 'max:255', 'unique:users'],
                'email' => 'required|email:dns|unique:users',
                'password' => 'required|min:5|max:255'
            ]
        );
        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        // $coba = session()->flash('success', 'Registration successful! Please Login');
        // $request->$coba;
        // return redirect('/login');

        return redirect('/login')->with('success', 'Registration Successful!, Please Login');
    }
}