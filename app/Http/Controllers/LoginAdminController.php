<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserAdmin;

class LoginAdminController extends Controller
{
    public function index ()
    {
        return view ('admin.loginadmin', 
        [
            'title' => 'Login admin'
        ]);
    }

    public function authenticate (Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|min:3',
            'password' => 'required'
        ]);

        if(Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/adminDashboard');
        }

        return back()->with('loginError', 'login failed!');
        
    }
}
