<?php

namespace Tests;

use Illuminate\Contracts\Console\Kernel;
use Illuminate\Foundation\Application;

/**
 * Trait for creating the application instance.
 */
trait CreatesApplication
{
    /**
     * Creates and configures a new application instance.
     *
     * This method should be called before any tests are executed to ensure
     * the application is in a consistent state.
     *
     * @return Application The application instance.
     */
    public function createApplication(): Application
    {
        // Include the bootstrap/app.php file which sets up the application.
        $app = require __DIR__.'/../bootstrap/app.php';

        // Bootstrap the application's service providers.
        $app->make(Kernel::class)->bootstrap();

        // Return the application instance.
        return $app;
    }
}

