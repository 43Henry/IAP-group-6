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
    
    public function applicationForm()
    {
        return view('ApplicationForm1');
    }

    public function registration()
    {
        return view('auth.registration');
    }  
 
    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) 
        {
            return redirect()->intended('home')
                         ->withSuccess('You have Successfully logged in');
        }
        
        return redirect("login")->withSuccess('You have entered invalid credentials');
        echo "Hello";
    }
 
    public function postRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
        $data = $request->all();
        $check = $this->create($data);
        return redirect("dashboard")->withSuccess('Great! You have Successfully loggedin');
    }
    
    public function dashboard()
    {
        if(Auth::check())
        {
            return view('landingPage');
        }
        
        return redirect("login")->withSuccess('Opps! You do not have access');
    }
 
    public function create(array $data)
    {
       return User::create([
         'name' => $data['name'],
         'email' => $data['email'],
         'password' => Hash::make($data['password'])
       ]);
    }
    
    public function logout() 
    {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }
}
