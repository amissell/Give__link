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
    return redirect()->intended('/dashboard');
  }

  // Handle password reset form submission
  // public function submitForgetPasswordForm(Request $request)
  // {
  //   $request->validate([
  //     'email' => 'required|email|exists:users',
  //   ]);

  //   $this->authService->handlePasswordResetRequest($request->email);

  //   return back()->with('message', 'We have e-mailed your password reset link!');
  // }

  // // Show reset password form
  // public function showResetPasswordForm($token)
  // {
  //   return view('auth.resetPassword', ['token' => $token]);
  // }

  // // Handle password reset logic
  // public function resetPassword(Request $request)
  // {
  //   $request->validate([
  //     'token' => 'required',
  //     'email' => 'required|email|exists:users',
  //     'password' => 'required|confirmed|min:6',
  //   ]);

  //   try {
  //     $this->authService->resetPassword($request->all());
  //     return redirect('/login')->with('message', 'Your password has been reset successfully!');
  //   } catch (\Exception $e) {
  //     return back()->withErrors(['email' => 'Invalid reset token or email.']);
  //   }
  // }
}
