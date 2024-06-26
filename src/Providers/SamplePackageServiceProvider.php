<?php

namespace MajidGholamheidari\SamplePackage\Providers;

use App\Http\Kernel;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Support\ServiceProvider;
use Majidheidari\SharedModels\Http\Middleware\CustomMiddleware;

class SamplePackageServiceProvider extends ServiceProvider
{


    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }


    /**
     * Bootstrap services.
     *
     * @return void
     * @throws BindingResolutionException
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

        $kernel = $this->app->make(Kernel::class);
        $kernel->pushMiddleware(CustomMiddleware::class);
    }
}
