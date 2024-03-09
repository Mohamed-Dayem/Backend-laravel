<?php

use Illuminate\Support\Str;

return [
    /*
    |--------------------------------------------------------------------------
    | Default Cache Store
    |--------------------------------------------------------------------------
    |
    | This option controls the default cache store that gets used when you
    | cache things in your application. Make sure to pick a cache store
    | that suits your needs and is available on your environment.
    |
    | Supported: 'apc', 'array', 'database', 'file', 'memcached', 'redis', 'dynamodb'
    |
    */
    'default' => env('CACHE_DRIVER', 'file'),

    /*
    |--------------------------------------------------------------------------
    | Cache Stores
    |--------------------------------------------------------------------------
    |
    | Here you may define all of the cache "stores" for your application as
    | well as their drivers. You may even define multiple stores of the
    | same driver, such as multiple Redis servers.
    |
    | Supported: 'apc', 'array', 'database', 'file', 'memcached', 'redis', 'dynamodb'
    |
    */
    'stores' => [
        'apc' => [
            'driver' => 'apc',
        ],

        'array' => [
            'driver' => 'array',
        ],

        'database' => [
            'driver' => 'database',
            'table' => 'cache',
            'connection' => null,
            'lock_connection' => null,
        ],

        'file' => [
            'driver' => 'file',
            'path' => storage_path('framework/cache'),
        ],

        'memcached' => [
            'driver' => 'memcached',
            'persistent_id' => null,
            'sasl' => [
                'username' => null,
                'password' => null,
            ],
            'options' => [
            ],

