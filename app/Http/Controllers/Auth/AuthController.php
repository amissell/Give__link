<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Services\AuthService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
  protected $authService;

  public function __construct(AuthService $authService)
  {
    $this->authService = $authService;
  }

  // Show registration form
  public function showRegisterForm()
  {
    return view('auth.register');
  }

  // Handle user registration
  public function register(Request $request)
  {

    $request->validate([
      'name' => 'required|string|max:255',
      'email' => 'required|email|unique:users',
      'password' => 'required|confirmed|min:6',
      'role' => 'required|in:donor,volunteer,organization',
    ]);
    // dd($request->all());


    $user = $this->authService->register($request->all());

    // dd($user);
    if (!$user) {
      return back()->withErrors(['error' => 'Registration failed. Please try again.']);
    }

    return redirect('/login')->with('message', 'Registration successful. Please login.');
  }

  // Show login form
  public function showLoginForm()
  {
    return view('auth.login');
  }

  // Handle login
  public function login(Request $request)
  {
    $request->validate([
      'email' => 'required|email',
      'password' => 'required|min:6',
    ]);

    $user = $this->authService->login($request->only('email', 'password'));

    if (!$user || !Hash::check($request->password, $user->password)) {
      return back()->withErrors(['email' => 'Invalid credentials']);
    }

    Auth::login($user); 


    if (Auth::user()->role === 'admin') {
      // Redirect admin to the dashboard
      return redirect()->route('dashboard');
  } elseif (Auth::user()->role === 'organization') {
      // Redirect organization to their page (e.g., events management)
      return redirect()->route('events.index');
  } else {
      // Redirect other users to their respective page (e.g., home)
      return redirect('/dashboard');
  }
  }



  public function logout(Request $request)
   {
     Auth::logout();
     $request->session()->invalidate();
     $request->session()->regenerateToken();
     return redirect('/login')->with('success', 'you have been logged out');    
   }
}
