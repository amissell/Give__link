<?php

namespace App\Providers;

use App\Repositories\UserRepository;

use Illuminate\Support\ServiceProvider;
use App\Repositories\PasswordResetRepository;
use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Repositories\Interfaces\PasswordResetRepositoryInterface;

class AppServiceProvider extends ServiceProvider
{
  /**
   * Register any application services.
   */
  public function register(): void
  {
    // $this->app->bind(PasswordResetRepositoryInterface::class, PasswordResetRepository::class);

    $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
  }

  /**
   * Bootstrap any application services.
   */
  public function boot(): void
  {
    //
  }
}
