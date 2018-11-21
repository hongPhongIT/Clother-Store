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
    'mandrill' => [
        'secret' => env('MANDRILL_SECRET'),
    ],
    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],
    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],
    'github' => [
        'client_id' => env('e2b246d68f5f2c36cb6b'),
        'client_secret' => env('126c726e439afa48dd7558499d7665fb21692144'),
        'redirect' => env('http://localhost:8000/callback/github'),
    ],
    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    'facebook' => [
        'client_id' => env('382016202298180'),
        'client_secret' => env('cfe8897697b81093cb5954b211250534'),
        'redirect' => env('http://localhost:8000/callback/facebook')
    ],
    'google' => [
        'client_id' => env('541048182088-jac5ru37cjrje675c3vvhas5lpcp5kt2.apps.googleusercontent.com'),
        'client_secret' => env('jAXthu1IvNoABYkYGsMn642r'),
        'redirect' => env('http://localhost:8000/callback/google')
    ],
    'twitter' => [

        'client_id' => env('TWITTER_CLIENT_ID'),
        'client_secret' => env('TWITTER_CLIENT_SECRET'),
        'redirect' => env('TWITTER_REDIRECT')
    ],
];
