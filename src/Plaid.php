<?php

namespace Stephenjude\Plaid;

use BadMethodCallException;
use ReflectionClass;
use TomorrowIdeas\Plaid\Resources\AbstractResource;

/**
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
class Plaid extends \TomorrowIdeas\PlaidSDK\Plaid
{
    public function __construct()
    {
        parent::__construct(
            config('plaid-sdk-laravel.client_id'),
            config('plaid-sdk-laravel.secret'),
            config('plaid-sdk-laravel.environment')
        );
    }

    /**
     * Dynamically call methods.
     *
     * @param  string  $method
     * @param  array  $parameters
     *
     * @return AbstractResource
     */
    public function __call($method, array $parameters)
    {
        return $this->getApiInstance($method);
    }

    /**
     * Returns the Api class instance for the given method.
     *
     * @param  string  $method
     *
     * @return AbstractResource
     * @throws BadMethodCallException
     */
    protected function getApiInstance($method)
    {
        $class = "\\Stephenjude\\Plaid\\Resources\\".ucwords($method);

        if (class_exists($class)
            && ! (new ReflectionClass($class))->isAbstract()
        ) {
            return new $class(
                $this->getHttpClient(),
                $this->client_id,
                $this->client_secret,
                $this->plaidEnvironments[$this->environment]
            );
        }

        throw new BadMethodCallException("Undefined method [{$method}] called.");
    }
}
