<?php

namespace Stephenjude\Plaid\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Stephenjude\Plaid\Plaid
 *
 * @method \TomorrowIdeas\PlaidSDK\Resources\Accounts accounts()
 * @method \TomorrowIdeas\PlaidSDK\Resources\Auth auth()
 * @method \TomorrowIdeas\PlaidSDK\Resources\BankTransfers bankTransfers()
 * @method \TomorrowIdeas\PlaidSDK\Resources\Categories categories()
 * @method \TomorrowIdeas\PlaidSDK\Resources\Institutions institutions()
 * @method \TomorrowIdeas\PlaidSDK\Resources\Investments investments()
 * @method \TomorrowIdeas\PlaidSDK\Resources\Items items()
 * @method \TomorrowIdeas\PlaidSDK\Resources\Liabilities liabilities()
 * @method \TomorrowIdeas\PlaidSDK\Resources\Tokens tokens()
 * @method \TomorrowIdeas\PlaidSDK\Resources\Payments payments()
 * @method \TomorrowIdeas\PlaidSDK\Resources\Processors processors()
 * @method \TomorrowIdeas\PlaidSDK\Resources\Reports reports()
 * @method \TomorrowIdeas\PlaidSDK\Resources\Sandbox sandbox()
 * @method \TomorrowIdeas\PlaidSDK\Resources\Transactions transactions()
 * @method \TomorrowIdeas\PlaidSDK\Resources\Webhooks webhooks()
 */
class Plaid extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'plaid-sdk-laravel';
    }
}
