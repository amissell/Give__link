<?php

namespace App\Http\Controllers\Auth;

use App\Services\AuthService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    protected $authService;

    public function __construct(AuthService $authService) // Dependency Injection here
    {
        $this->authService = $authService;
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        
        $user = $this->authService->login($credentials);
        
        if (!$user) {
            return back()->with('error', 'Invalid credentials');
        }

        if ($user->hasRole('admin')) {
            return redirect()->route('dashboard');
        } elseif ($user->hasRole('donor')) {
            return redirect()->route('donor.dashboard');
        }

        return redirect('/'); // fallback
    }

    public function logout()
{
    auth()->logout(); // Log the user out
    return redirect('/login')->with('success', 'You have been logged out.');
}

}
