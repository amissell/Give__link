<?php

namespace App\Services;

use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Repositories\Interfaces\PasswordResetRepositoryInterface;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthService
{
  protected $userRepository;
  protected $passwordResetRepository;

  public function __construct(
    UserRepositoryInterface $userRepository,
    // PasswordResetRepositoryInterface $passwordResetRepository
  ) {
    $this->userRepository = $userRepository;
    // $this->passwordResetRepository = $passwordResetRepository;
  }

  // Handle user registration
  public function register(array $data)
  {
    return $this->userRepository->register($data);
  }

  // Handle user login
  public function login(array $credentials)
  {
    return $this->userRepository->login($credentials);
  }

  // Handle the password reset process
  // public function handlePasswordResetRequest(string $email)
  // {
  //   $token = Str::random(64); // Generate a random token

  //   // Store token in the database
  //   $this->passwordResetRepository->createResetToken($email, $token);

  //   // Send the token via email to the user
  //   Mail::send('emails.forgetPassword', ['token' => $token], function ($message) use ($email) {
  //     $message->to($email);
  //     $message->subject('Reset Password');
  //   });
  // }

  // // Reset the user's password
  // public function resetPassword(array $data)
  // {
  //   // Find the reset token
  //   $reset = $this->passwordResetRepository->findByToken($data['token']);

  //   if (!$reset || $reset->email != $data['email']) {
  //     return response()->json(['error' => 'Invalid reset token or email'], 400);
  //   }


  //   // Reset the user's password
  //   $user = User::where('email', $data['email'])->first();
  //   $user->password = Hash::make($data['password']); // Hash the new password
  //   $user->save();

  //   // Delete the token after use
  //   $this->passwordResetRepository->deleteToken($data['email']);
  // }
}
