<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'mail_accounts' => [
        'account_a' => [
            'driver' => env('MAIL_MAILER', 'smtp'),
            'host' => env('MAIL_HOST'),
            'port' => env('MAIL_PORT'),
            'username' => env('MAIL_USERNAME'),
            'password' => env('MAIL_PASSWORD'),
            'encryption' => env('MAIL_ENCRYPTION'),
            'from' => [
                'address' => env('MAIL_FROM_ADDRESS'),
                'name' => env('MAIL_FROM_NAME'),
            ],
        ],
        'account_b' => [
            'driver' => env('MAIL_MAILER', 'smtp'),
            'host' => env('MAIL_HOST_B'),
            'port' => env('MAIL_PORT_B'),
            'username' => env('MAIL_USERNAME_B'),
            'password' => env('MAIL_PASSWORD_B'),
            'encryption' => env('MAIL_ENCRYPTION_B'),
            'from' => [
                'address' => env('MAIL_FROM_ADDRESS_B'),
                'name' => env('MAIL_FROM_NAME_B'),
            ],
        ],
    ],
];
