<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        return $request->expectsJson() ? null : route('login');
    }

    /**
     * Determine if the user is logged in to an arbitrary guard.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  array  $guards
     * @return void
     */
    protected function authenticate($request, array $guards)
    {
        $this->authenticateViaSession($request, $guards);

        if (method_exists($this, 'authenticateViaToken')) {
            $this->authenticateViaToken($request, $guards);
        }
    }
}
