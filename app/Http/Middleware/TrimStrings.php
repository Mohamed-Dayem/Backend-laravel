<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\TrimStrings as Middleware;

/**
 * Class TrimStrings
 * 
 * This middleware class extends the base TrimStrings middleware provided by Laravel.
 * Its primary function is to trim excess white space from input data.
 * However, it has a list of exceptions where trimming is not applied.
 *
 * @package App\Http\Middleware
 */
class TrimStrings extends Middleware
{
    /**
     * The names of the attributes that should not be trimmed.
     *
     * An array containing the names of the attributes that should not be trimmed.
     * These attributes are typically related to user authentication and sensitive data.
     *
     * @var array<int, string>
     */
    protected $except = [
        'current_password', // current user's password for authentication
        'password', // new user's password during registration or password change
        'password_confirmation' // confirmation of the new user's password
    ];
}

