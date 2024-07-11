<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //


    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validate the request

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Sign in the user
        if (!auth()->attempt($request->only('email', 'password'))) {
            return back()->with('status', 'Invalid login details');
        }

        // Redirect
        return redirect()->route('home');
    }

    public function logout()
    {
        //auth()->logout();


        Auth::logout();



        return redirect()->route('login');
    }
}
