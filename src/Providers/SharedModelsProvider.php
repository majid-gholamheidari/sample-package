<?php

namespace MajidGholamheidari\SamplePackege\Providers;

use App\Http\Kernel;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Support\ServiceProvider;
use Majidheidari\SharedModels\Http\Middleware\CustomMiddleware;

class SharedModelsProvider extends ServiceProvider
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
        $kernel = $this->app->make(Kernel::class);
        $kernel->pushMiddleware(CustomMiddleware::class);
    }
}
