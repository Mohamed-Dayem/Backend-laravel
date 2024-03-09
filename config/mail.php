<?php

// Return an array containing the mail configuration for the application.
return [

    // The 'default' key specifies the default mailer that will be used by the application.
    'default' => env('MAIL_MAILER', 'smtp'),

    // The 'mailers' key contains an array of mailer configurations that can be used by the application.
    'mailers' => [

        // The 'smtp' key contains the SMTP mailer configuration.
        'smtp' => [
            'transport' => 'smtp', // Specify that this mailer will use SMTP.
            'url' => env('MAIL_URL'), // The URL for the SMTP server.
            'host' => env('MAIL_HOST', 'smtp.mailgun.org'), // The hostname or IP address of the SMTP server.
            'port' => env('MAIL_PORT', 587), // The port number to use when connecting to the SMTP server.
            'encryption' => env('MAIL_ENCRYPTION', 'tls'), // The encryption method to use when connecting to the SMTP server.
            'username' => env('MAIL_USERNAME'), // The username to use when connecting to the SMTP server.
            'password' => env('MAIL_PASSWORD'), // The password to use when connecting to the SMTP server.
            'timeout' => null, // The timeout value in seconds for connecting to the SMTP server.
            'local_domain' => env('MAIL_EHLO_DOMAIN'), // The local domain to use when identifying to the SMTP server.
        ],

        // The 'ses' key contains the Amazon SES mailer configuration.
        'ses' => [
            'transport' => 'ses', // Specify that this mailer will use Amazon SES.
        ],

        // The 'postmark' key contains the Postmark mailer configuration.
        'postmark' => [
            'transport' => 'postmark', // Specify that this mailer will use Postmark.
            // 'message_stream_id' => null, // The ID of the message stream to use when sending emails through Postmark.
            // 'client' => [ // Configuration options for the Postmark client.
            //     'timeout' => 5, // The timeout value in seconds for connecting to the Postmark API.
            // ],
        ],

        // The 'mailgun' key contains the Mailgun mailer configuration.
        'mailgun' => [
            'transport' => 'mailgun', // Specify that this mailer will use Mailgun.
            // 'client' => [ // Configuration options for the Mailgun client.
            //     'timeout' => 5, // The timeout value in seconds for connecting to the Mailgun API.
            // ],
        ],

        // The 'sendmail' key contains the Sendmail mailer configuration.
        'sendmail' => [
            'transport' => 'sendmail', // Specify that this mailer will use Sendmail.
            'path' => env('MAIL_SENDMAIL_PATH', '/usr/sbin/sendmail -bs -i'), // The path to the Sendmail binary.
        ],

        // The 'log' key contains the Log mailer configuration.
        'log' => [
            'transport' => 'log', // Specify that this mailer will log emails instead of sending them.
            'channel' => env('MAIL_LOG_CHANNEL'), // The name of the Log channel to use for logging emails.
        ],

        // The 'array' key contains the Array mailer configuration.
        'array' => [
            'transport' => 'array', // Specify that this mailer will use an array of messages.
        ],

        // The 'failover' key contains the Failover mailer configuration.
        'failover' => [
            'transport' => 'failover', // Specify that this mailer will use a failover strategy.
            'mailers' => [ // The mailers to use in the failover strategy.
                'smtp',
                'log',
            ],
        ],

        // The 'roundrobin' key contains the Round Robin mailer configuration.
        'roundrobin' => [
            'transport' => 'roundrobin', // Specify that this mailer will use a round robin strategy.
            'mailers' => [ // The mailers to use in the round robin strategy.
                'ses',
                'postmark',
            ],
        ],
    ],

    // The 'from' key contains the default 'from' address and name for emails.
    'from' => [
        'address' => env('MAIL_FROM_ADDRESS', 'hello@example.com'), // The default 'from' email address.
        'name' => env('MAIL_FROM_NAME', 'Example'), // The default 'from' name.
    ],

    // The 'markdown' key contains the Markdown mail settings.
    'markdown' => [
        'theme' => 'default', // The default Markdown theme.

        // The 'paths' key contains an array of directories that contain Markdown email templates.
        'paths' => [
            resource_path('views/vendor/mail'),
        ],
    ],
];
