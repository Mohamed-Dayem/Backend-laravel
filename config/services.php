<?php

namespace App\Providers;

use Illuminate\Support\Facades\Validator;

class ThirdPartyServicesProvider
{
    /**
     * The available third-party services.
     *
     * @var array
     */
    protected $services = [
        'mailgun' => [
            'domain' => null,
            'secret' => null,
            'endpoint' => 'api.mailgun.net',
            'scheme' => 'https',
        ],
        'postmark' => [
            'token' => null,
        ],
        'ses' => [
            'key' => null,
            'secret' => null,
            'region' => 'us-east-1',
        ],
        'sendgrid' => [
            'key' => null,
        ],
        'sparkpost' => [
            'key' => null,
        ],
    ];

    /**
     * Validate and set the third-party services configuration.
     *
     * @return array
     */
    public function provide()
    {
        $services = $this->services;

        Validator::make(
            $this->getServiceValues($services),
            $this->getServiceRules($services)
        )->validate();

        return $services;
    }

    /**
     * Get the service values from the environment.
     *
     * @param  array  $services
     * @return array
     */
    protected function getServiceValues(array $services)
    {
        return array_map(function ($service) {
            return array_merge($service, [
                'domain' => env("THIRD_PARTY_{$service['name']}_DOMAIN"),
                'secret' => env("THIRD_PARTY_{$service['name']}_SECRET"),
                'token' => env("THIRD_PARTY_{$service['name']}_TOKEN"),
                'key' => env("THIRD_PARTY_{$
