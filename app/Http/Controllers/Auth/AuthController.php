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
        return view('auth.register'); 
    }


    public function login(Request $request)
{
    $credentials = $request->only('email', 'password');
    $user = $this->authService->login($credentials);

    if (!$user) {
        return back()->with('error', 'Invalid credentials');
    }

    if (!auth()->user()->is_active) {
        auth()->logout();
        return redirect()->route('login')->withErrors(['Your account is suspended.']);
    }

    if ($user->hasRole('admin')) {
        return redirect()->route('dashboard');
    } elseif ($user->hasRole('volunteer')) {
        return redirect()->route('Volunteers.events');
    }

    if ($user->hasRole('organization')) {
        $organization = $user->organization; 

        if (!$organization) {
            return redirect()->route('organizations.create');
        }

        if ($organization->status === 'rejected') {
            auth()->logout();
            return redirect()->route('login')->withErrors([
                'email' => 'Your organization request was rejected by the admin.'
            ]);
        }

        if ($organization->status === 'pending') {
            return redirect()->route('organizations.waiting');
        }

        if ($organization->status === 'approved') {
            return redirect()->route('organizations.dashboard');
        }
    }

    // fallback
    return redirect()->route('home');
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
            'role' => 'required|in:,volunteer,organization',
        ]);

        $user = $this->authService->register($validated);

        auth()->login($user);

        if ($user->hasRole('admin')) {
            return redirect()->route('dashboard');
        } elseif ($user->hasRole('volunteer')) {
            return redirect()->route('login');
        } elseif ($user->hasRole('organization')) {
            return redirect()->route('login')->with('success', 'Registered successfully. Please login to complete your profile.');
        }
        else {
            return redirect('/');
            
        }
    }

}
