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

    if (!auth()->user()->is_active) {
        auth()->logout();
        return redirect()->route('login')->withErrors(['Your account is suspended.']);
    }

    // Admin, donor, volunteer - redirect as usual
    if ($user->hasRole('admin')) {
        return redirect()->route('dashboard');
    } elseif ($user->hasRole('donor')) {
        return redirect()->route('donor');
    } elseif ($user->hasRole('volunteer')) {
        return redirect()->route('volunteer');
    }

    // ✅ Now handle ORGANIZATION
    if ($user->hasRole('organization')) {
        $organization = $user->organization; // Relationship: User hasOne Organization

        if (!$organization) {
            // ✅ They haven’t filled the form yet
            return redirect()->route('organizations.create');
        }

        if ($organization->status === 'rejected') {
            // ❌ Rejected: log out and show message
            auth()->logout();
            return redirect()->route('login')->withErrors([
                'email' => 'Your organization request was rejected by the admin.'
            ]);
        }

        if ($organization->status === 'pending') {
            // ⏳ Still waiting approval
            return redirect()->route('organizations.waiting');
        }

        if ($organization->status === 'approved') {
            // ✅ All good! Go to dashboard or wherever
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
        } elseif ($user->hasRole('organization')) {
            return redirect()->route('login')->with('success', 'Registered successfully. Please login to complete your profile.');
        }
        else {
            return redirect('/');
            
        }
    }

}
