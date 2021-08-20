<?php

namespace Stephenjude\Plaid\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Stephenjude\Plaid\Plaid
 *
 * @method \TomorrowIdeas\Plaid\Resources\Accounts accounts()
 * @method \TomorrowIdeas\Plaid\Resources\Auth auth()
 * @method \TomorrowIdeas\Plaid\Resources\BankTransfers bankTransfers()
 * @method \TomorrowIdeas\Plaid\Resources\Categories categories()
 * @method \TomorrowIdeas\Plaid\Resources\Institutions institutions()
 * @method \TomorrowIdeas\Plaid\Resources\Investments investments()
 * @method \TomorrowIdeas\Plaid\Resources\Items items()
 * @method \TomorrowIdeas\Plaid\Resources\Liabilities liabilities()
 * @method \TomorrowIdeas\Plaid\Resources\Tokens tokens()
 * @method \TomorrowIdeas\Plaid\Resources\Payments payments()
 * @method \TomorrowIdeas\Plaid\Resources\Processors processors()
 * @method \TomorrowIdeas\Plaid\Resources\Reports reports()
 * @method \TomorrowIdeas\Plaid\Resources\Sandbox sandbox()
 * @method \TomorrowIdeas\Plaid\Resources\Transactions transactions()
 * @method \TomorrowIdeas\Plaid\Resources\Webhooks webhooks()
 */
class Plaid extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'plaid-sdk-laravel';
    }
}
