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
}
