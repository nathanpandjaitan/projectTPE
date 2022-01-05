<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index ()
    {
        return view ('users.register', 
        [
            'title' => 'Register User'
        ]);
    }

    public function store (Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);


        $validatedData['password'] = bcrypt ($validatedData['password']);

        User::create($validatedData);

        // flash Message jika login berhasil 
        // $request->session()->flash('success', 'Registration successfull! Please login');

        //                             Cara lebih ringkas Flash Message
        return redirect('/loginUser')->with('success', 'Registration successfull! Please login');

    }


}