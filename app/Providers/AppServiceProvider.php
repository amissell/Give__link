<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\UserRepository;
use App\Repositories\UserRepositoryInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
      $this->app->bind(
        \App\Repositories\Interfaces\UserRepositoryInterface::class,
        \App\Repositories\UserRepository::class
    );

    $this->app->bind(
        \App\Repositories\Interfaces\PasswordResetRepositoryInterface::class,
        \App\Repositories\PasswordResetRepository::class
    );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
