<?php

return [
    'mode' => env('MPESA_MODE', 'live'), // Can only be 'sandbox' Or 'live'. If empty or invalid, 'live' will be used.
    'sandbox' => [
        'consumer_key' => env('MPESA_SANDBOX_CONSUMER_KEY', ''),
        'consumer_secret' => env('MPESA_SANDBOX_CONSUMER_SECRET', ''),
        'token_url' => env('MPESA_SANDBOX_TOKEN_URL', ''),
        'stkpush_url' => env('MPESA_SANDBOX_STKPUSH_URL', ''),
        'stkquery_url' => env('MPESA_SANDBOX_STKPUSHQUERY_URL', ''),
        'passkey' => env('MPESA_SANDBOX_PASSKEY', ''),
        'shortcode' => env('MPESA_SANDBOX_SHORTCODE', '')
    ],
    'live' => [
        'consumer_key' => env('MPESA_CONSUMER_KEY', ''),
        'consumer_secret' => env('MPESA_CONSUMER_SECRET', ''),
        'token_url' => env('MPESA_TOKEN_URL', ''),
        'stkpush_url' => env('MPESA_STKPUSH_URL', ''),
        'stkquery_url' => env('MPESA_STKPUSHQUERY_URL', ''),
        'passkey' => env('MPESA_PASSKEY', ''),
        'shortcode' => env('MPESA_SHORTCODE', '')
    ],
    'settings' => array(
        'mode' => env('MPESA_EXPRESS', ''),
        'Http.ConnectionTimeOut' => 30,
        'log.LogEnabled' => true,
        'log.FileName' => storage_path() . '/logs/mpesa.log',
        'log.LogLevel' => 'ERROR',
    ),
];
