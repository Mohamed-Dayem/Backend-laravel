<?php

use Monolog\Handler\NullHandler;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\SyslogUdpHandler;
use Monolog\Processor\PsrLogMessageProcessor;

// The main configuration array for the Laravel logging system.
return [

    // The default log channel that gets used when writing messages to the logs.
    'default' => env('LOG_CHANNEL', 'stack'),

    // The log channel that should be used to log warnings regarding deprecated PHP and library features.
    'deprecations' => [
        'channel' => env('LOG_DEPRECATIONS_CHANNEL', 'null'),
        'trace' => false,
    ],

    // The log channels for the application, allowing you to utilize various powerful log handlers / formatters.
    'channels' => [
        'stack' => [
            // The 'stack' driver combines the power of other drivers to provide a more robust logging solution.
            'driver' => 'stack',
            'channels' => ['single'],
            'ignore_exceptions' => false,
        ],

        'single' => [
            // The 'single' driver writes all log messages to a single file.
            'driver' => 'single',
            'path' => storage_path('logs/laravel.log'),
            'level' => env('LOG_LEVEL', 'debug'),
            'replace_placeholders' => true,
        ],

        'daily' => [
            // The 'daily' driver rotates log files on a daily basis.
            'driver' => 'daily',
            'path' => storage_path('logs/laravel.log'),
            'level' => env('LOG_LEVEL', 'debug'),
            'days' => 14,
            'replace_placeholders' => true,
        ],

        'slack' => [
            // The 'slack' driver sends log messages to a Slack channel.
            'driver' => 'slack',
            'url' => env('LOG_SLACK_WEBHOOK_URL'),
            'username' => 'Laravel Log',
            'emoji' => ':boom:',
            'level' => env('LOG_LEVEL', 'critical'),
            'replace_placeholders' => true,
        ],

        'papertrail' => [
            // The 'papertrail' driver sends log messages to Papertrail, a centralized log management service.
            'driver' => 'monolog',
            'level' => env('LOG_LEVEL', 'debug'),
            'handler' => env('LOG_PAPERTRAIL_HANDLER', SyslogUdpHandler::class),
            'handler_with' => [
                // Configuration for the Papertrail handler.
                'host' => env('PAPERTRAIL_URL'),
                'port' => env('PAPERTRAIL_PORT'),
                'connectionString' => 'tls://'.env('PAPERTRAIL_URL').':'.env('PAPERTRAIL_PORT'),
            ],
            'processors' => [PsrLogMessageProcessor::class],
        ],

        'stderr' => [
            // The 'stderr' driver writes log messages to the STDERR stream.
            'driver' => 'monolog',
            'level' => env('LOG_LEVEL', 'debug'),
            'handler' => StreamHandler::class,
            'formatter' => env('LOG_STDERR_FORMATTER'),
            'with' => [
                // Configuration for the STDERR stream handler.
                'stream' => 'php://stderr',
            ],
            'processors' => [PsrLogMessageProcessor::class],
        ],

        'syslog' => [
            // The 'syslog' driver writes log messages to the system syslog.
            'driver' => 'syslog',
            'level' => env('LOG_LEVEL', 'debug'),
            'facility' => LOG_USER,
            'replace_placeholders' => true,
        ],

        'errorlog' => [
            // The 'errorlog' driver writes log messages to the PHP error_log.
            'driver' => 'errorlog',
            'level' => env('LOG_LEVEL', 'debug'),
            'replace_placeholders' => true,
        ],

        'null' => [
            // The 'null' driver discards all log messages.
            'driver' => 'monolog',
            'handler' => NullHandler::class,
        ],

        'emergency' => [
            // The 'emergency' channel is used for emergency-level log messages.
            'path' => storage_path('logs/laravel.log'),
        ],
    ],

];

