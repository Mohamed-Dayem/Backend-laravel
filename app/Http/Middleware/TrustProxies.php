<?php

namespace App\Http\Middleware;

use Illuminate\Http\Middleware\TrustProxies as Middleware;
use Illuminate\Http\Request;

class TrustProxies extends Middleware
{
    /**
     * The trusted proxies for this application.
     *
     * @var array<int, string>|string|null
     */
    protected $proxies;

    /**
     * The headers that should be used to detect proxies.
     *
     * @var int
     */
    protected $headers =
        Request::HEADER_X_FORWARDED_FOR |
        Request::HEADER_X_FORWARDED_HOST |
        Request::HEADER_X_FORWARDED_PORT |
        Request::HEADER_X_FORWARDED_PROTO |
        Request::HEADER_X_FORWARDED_AWS_ELB;

    /**
     * Create a new middleware instance.
     *
     * @param  array<int, string>|string|null  $proxies
     * @return void
     */
    public function __construct($proxies = null)
    {
        parent::__construct($proxies);

        // Set the headers property to a new instance of \Illuminate\Http\Request
        // so that we can use the defined constants
        $this->headers = request()->headerNames();
        $this->headers = array_merge(
            $this->headers,
            [
                'x-forwarded-for' => 'X_FORWARDED_FOR',
                'x-forwarded-host' => 'X_FORWARDED_HOST',
                'x-forwarded-port' => 'X_FORWARDED_PORT',
                'x-forwarded-proto' => 'X_FORWARDED_PROTO',
                'x-forwarded-aws-elb' => 'X_FORWARDED_AWS_ELB'
            ]
        );
    }
}
