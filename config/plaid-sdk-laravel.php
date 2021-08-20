<?php

// config for Stephenjude/Plaid
return [
    'client_id' => env('PLAID_CLIENT_ID'),

    'secret' => env('PLAID_SECRET'),

    'environment' => env('PLAID_ENVIRONMENT', 'development'),
];
