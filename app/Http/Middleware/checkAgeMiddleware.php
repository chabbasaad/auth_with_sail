<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class checkAgeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(auth()->check()){
        if(Auth::user()->age < 18){
        //    dd('You are not allowed to access this page');
        return redirect('/');
           // return redirect()->route('home')->with('error', 'You are not allowed to access this page');
        }
    }


        return $next($request);
    }
}
