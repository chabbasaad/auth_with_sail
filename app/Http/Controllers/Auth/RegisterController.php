<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //

    public function index()
    {
        return view('auth.register');
    }


    public function register(Request $request)
    {
      //  dd($request->all());
        // Validate the request


        // $request->validate([
        //     'name' => 'required|max:25|min:3',
        //     'email' => 'required|email|max:255',
        //     'password' => 'required|confirmed',
        // ]);



        // Create a new user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'age' => $request->age,
        ]);

        Auth::login($user);

        // Sign in the user
        auth()->attempt($request->only('email', 'password'));

        // Redirect
        return redirect()->route('home');
    }
}
