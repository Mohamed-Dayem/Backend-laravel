<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance as Middleware;

/**
 * This class, PreventRequestsDuringMaintenance, extends the Middleware
 * class provided by Laravel's foundation. It's responsible for preventing
 * requests from reaching the application while maintenance mode is enabled.
 */
class PreventRequestsDuringMaintenance extends Middleware
{
    /**
     * The URIs that should be reachable while maintenance mode is enabled.
     *
     * An array of URI patterns that will be allowed access even when
     * the application is in maintenance mode. This can be useful for
     * allowing specific pages, such as a maintenance mode landing page,
     * to still be accessible.
     *
     * @var array<int, string>
     */
    protected $except = [
        // Add URI patterns to this array to allow access during maintenance mode.
    ];
}

