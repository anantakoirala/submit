<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'paypal' => [
    'client_id' => 'AXn_Y4H1l7dt9aLoZzSxTgcI0zVzaLjF1rLpaGA0AKj9Xw6AulBp_kfj9DVU-u4M-VN-r_okwSVQgU21',
    'secret' => 'EPdAvaSJ-4VQX_f2r5bfwpwQkLAtEUxnbrJXsIjb_RAt899t6s9mQ7ckUXyo6LKI3YvqTnul9JxrI26j'
],

];
