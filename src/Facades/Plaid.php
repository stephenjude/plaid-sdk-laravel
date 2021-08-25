<?php

namespace Stephenjude\Plaid\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Stephenjude\Plaid\Plaid
 *
 * @method \Stephenjude\PlaidSDK\Resources\Accounts accounts()
 * @method \Stephenjude\PlaidSDK\Resources\Auth auth()
 * @method \Stephenjude\PlaidSDK\Resources\BankTransfers bankTransfers()
 * @method \Stephenjude\PlaidSDK\Resources\Categories categories()
 * @method \Stephenjude\PlaidSDK\Resources\Institutions institutions()
 * @method \Stephenjude\PlaidSDK\Resources\Investments investments()
 * @method \Stephenjude\PlaidSDK\Resources\Items items()
 * @method \Stephenjude\PlaidSDK\Resources\Liabilities liabilities()
 * @method \Stephenjude\PlaidSDK\Resources\Tokens tokens()
 * @method \Stephenjude\PlaidSDK\Resources\Payments payments()
 * @method \Stephenjude\PlaidSDK\Resources\Processors processors()
 * @method \Stephenjude\PlaidSDK\Resources\Reports reports()
 * @method \Stephenjude\PlaidSDK\Resources\Sandbox sandbox()
 * @method \Stephenjude\PlaidSDK\Resources\Transactions transactions()
 * @method \Stephenjude\PlaidSDK\Resources\Webhooks webhooks()
 */
class Plaid extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'plaid-sdk-laravel';
    }
}
