<?php

// Import necessary classes for working with Laravel's configuration system
use Illuminate\Support\Facades\Facade;
use Illuminate\Support\ServiceProvider;

// The application configuration array
return [
    // The name of the application, as displayed in the browser
    'name' => env('APP_NAME', 'Laravel'),
    // The environment the application is running in (e.g., production, development)
    'env' => env('APP_ENV', 'production'),
    // Whether debug mode is enabled or not
    'debug' => env('APP_DEBUG', false),
    // The base URL for the application
    'url' => env('APP_URL', 'http://localhost'),
    // The URL for serving static assets
    'asset_url' => env('ASSET_URL'),
    // The timezone for the application
    'timezone' => 'UTC',
    // The default locale for the application
    'locale' => 'en',
    // The fallback locale for the application
    'fallback_locale' => 'en',
    // The locale for generating fake data
    'faker_locale' => 'en_US',
    // The application key, used for encryption and other purposes
    'key' => env('APP_KEY'),
    // The encryption algorithm used for encrypting sensitive data
    'cipher' => 'AES-256-CBC',
    // Configuration for the maintenance mode
    'maintenance' => [
        // The driver used for maintenance mode (e.g., file, off)
        'driver' => 'file',
    ],
    // An array of service providers for the application
    'providers' => array_merge(
        // Default service providers provided by Laravel
        ServiceProvider::defaultProviders(),
        [
            // Custom service providers for the application
            App\Providers\AppServiceProvider::class,
            App\Providers\AuthServiceProvider::class,
            // App\Providers\BroadcastServiceProvider::class,
            App\Providers\EventServiceProvider::class,
           
