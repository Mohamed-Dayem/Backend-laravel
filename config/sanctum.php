<?php

use Laravel\Sanctum\Sanctum;

return [

    /*
    |--------------------------------------------------------------------------
    | Stateful Domains
    |--------------------------------------------------------------------------
    |
    | This array contains the domains or hosts from which stateful API
    | authentication cookies will be accepted. Typically, these should
    | include your local and production domains which access your API
    | via a frontend Single Page Application (SPA).
    |
    | The domain names should be separated by commas. The default value
    | includes 'localhost', the application URL, '127.0.0.1', and '::1'.
    |
    */

    'stateful' => explode(',', env('SANCTUM_STATEFUL_DOMAINS', sprintf(
        '%s%s',
        'localhost,' . env('APP_URL') . ',127.0.0.1,127.0.0.1:' . env('APP_PORT'),
        '::1'
    ))),

    /*
    |--------------------------------------------------------------------------
    | Sanctum Guards
    |--------------------------------------------------------------------------
    |
    | This array specifies the authentication guards that will be checked when
    | Sanctum is trying to authenticate a request. If none of these guards
    | are able to authenticate the request, Sanctum will use the bearer
    | token that's present on an incoming request for authentication.
    |
    | The default value is set to 'web', which is the default guard defined
    | in Laravel's 'config/auth.php' configuration file.
    |
    */

    'guard' => [env('SANCTUM_GUARD', 'web')],

    /*
    |--------------------------------------------------------------------------
    | Expiration Minutes
    |--------------------------------------------------------------------------
    |
    | This value determines the number of minutes until an issued token will
    | be considered expired. This will override any values set in the token's
    | "expires_at" attribute, but first-party sessions are not affected.
    |
    | Set this value to 'null' to disable token expiration. The default value
    | is set to 'null'.
    |
    */

    'expiration' => env('SANCTUM_EXPIRATION', null),

    /*
    |--------------------------------------------------------------------------
    | Token Prefix
    |--------------------------------------------------------------------------
    |
    | Sanctum can prefix new tokens to take advantage of security scanning
    | initiatives that notify developers if they commit tokens into
    | repositories. This can help prevent unauthorized access to your
    | application.
    |
    | See: https://docs.github.com/en/code-security/secret-scanning/about-secret-scanning
    |
    */

    'token_prefix' => env('SANCTUM_TOKEN_PREFIX', ''),

    /*
    |--------------------------------------------------------------------------
    | Sanctum Middleware
    |--------------------------------------------------------------------------
    |
    | This configuration specifies the middleware used by Sanctum while
    | processing the request. You can customize the middleware listed below
    | as required.
    |
    */

    'middleware' => [
        'authenticate_session' => Laravel\Sanctum\Http\Middleware\AuthenticateSession::class,
        'encrypt_cookies' => App\Http\Middleware\EncryptCookies::class,
        'verify_csrf_token' => App\Http\Middleware\VerifyCsrfToken::class,
    ],

];


