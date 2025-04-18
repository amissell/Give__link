<?php

// namespace App\Http\Middleware;

// use Closure;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;

// class IsAdmin
// {
//     /**
//      * Handle an incoming request.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  \Closure  $next
//      * @return \Symfony\Component\HttpFoundation\Response
//      */
//     public function handle(Request $request, Closure $next)
//     {
//         // Check if the user is authenticated and has the admin role
//         if (Auth::check() && Auth::user()->role === 'admin') {
//             return $next($request); // Allow access to the next request
//         }

//         // Redirect to home if the user is not an admin
//         return redirect()->route('home')->with('error', 'You are not authorized to view this page');
//     }
// }
