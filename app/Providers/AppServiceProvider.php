<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

// Extend the base ServiceProvider class
class AppServiceProvider extends ServiceProvider
{
    // Declare any dependencies here, if any
    // protected $bindings = [
    //     // 'someInterface' => 'someImplementation'
    // ];

    // Register any application services
    public function register(): void
    {
        // Register any bindings, singletons, or other services here
        // Example:
        // $this->app->singleton('Foo', function ($app) {
        //     return new Foo();
        // });
    }

    // Bootstrap any application services
    public function boot(): void
    {
        // Perform any bootstrapping or setup logic here
        // Example:
        // if (config('some.option')) {
        //     $this->app->make('Foo')->doSomething();
        // }
    }

    // Define any custom events or listeners here
    // protected $listen = [
    //     'event.name' => [
    //         'EventListener',
    //     ],
    // ];

    // Define any custom middleware here
    // protected $middleware = [
    //     'middleware.name',
    // ];

    // Define any custom middleware groups here
    // protected $middlewareGroups = [
    //     'web' => [
    //         'middleware.name',
    //     ],
    // ];

    // Define any custom route middleware here
    // protected $routeMiddleware = [
    //     'middleware.name' => 'middleware.class',
    // ];
}
