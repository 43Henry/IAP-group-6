<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Session;
use Hash;

class AuthenticationController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function postLogin(Request $request)
    {
        $request -> validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request -> only('email', 'password');
        if(Auth::attempt($credentials))
        {
            return redirect() -> intended('dashboard')
                    ->withSuccess('Log in successful.');
        }

        return redirect("login") -> withSuccess('Invalid credentials.');
    }
}
