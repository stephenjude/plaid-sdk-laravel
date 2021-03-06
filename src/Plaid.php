<?php

namespace Stephenjude\Plaid;

class Plaid extends \Stephenjude\PlaidSDK\Plaid
{
    public function __construct()
    {
        parent::__construct(
            config('plaid-sdk-laravel.client_id'),
            config('plaid-sdk-laravel.secret'),
            config('plaid-sdk-laravel.environment')
        );
    }
}
