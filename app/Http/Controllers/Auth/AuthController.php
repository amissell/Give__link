<?php

namespace App\Http\Controllers\Auth;

use App\Repositories\UserRepository;
use App\Services\AuthService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class AuthController extends Controller
{
    protected $authService;

    public function __construct(AuthService $authService) 
    {
        $this->authService = $authService;
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function showRegistrationForm()
    {
        return view('auth.register'); // Return the view to show the registration form
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
        } elseif ($user->hasRole('volunteer')) {
            return redirect()->route('volunteer.dashboard');
        } elseif ($user->hasRole('organization')) {
            return redirect()->route('organization.dashboard');
        }

        if (!auth()->user()->is_active) {
            auth()->logout();
            return redirect()->route('login')->withErrors(['Your account is suspended.']);
        }
        

        return redirect('/'); 
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/login')->with('success', 'You have been logged out.');
    }


    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed', 
            'role' => 'required|in:donor,volunteer,organization',
        ]);

        $user = $this->authService->register($validated);

        // Log in the user after successful registration
        auth()->login($user);

        // Redirect based on the user role
        if ($user->hasRole('admin')) {
            return redirect()->route('dashboard');
        } elseif ($user->hasRole('donor')) {
            return redirect()->route('donor.dashboard');
        } else {
            return redirect('/');
        }
    }

}
