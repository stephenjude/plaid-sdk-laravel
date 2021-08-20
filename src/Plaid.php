<?php

namespace Stephenjude\Plaid;

use BadMethodCallException;
use ReflectionClass;
use TomorrowIdeas\Plaid\Resources\AbstractResource;

/**
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
class Plaid extends \TomorrowIdeas\Plaid\Plaid
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
        $class = "\\TomorrowIdeas\\Plaid\\Resources\\".ucwords($method);

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
