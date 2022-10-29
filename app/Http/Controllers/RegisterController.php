<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.register', [
            'title' => 'Inventaris | Register'
        ]);
    }

    public function createAccount(Request $request)
    {
        $validatedData = $request->validate([
            'name'      => 'required|max:255',
            'username'  => 'required|min:3|max:255|unique:users',
            'email'     => 'required|email:dns|unique:users',
            'password'  => 'required|min:5|max:25'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        return redirect('/')->with('success', 'Registration successful! Please login');
    }
}
