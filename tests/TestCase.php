<?php

namespace Stephenjude\Plaid\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Stephenjude\Plaid\PlaidServiceProvider;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            PlaidServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('plad-sdk-laravel.client_id', 'testing');
        config()->set('plad-sdk-laravel.secret', 'testing');
        config()->set('plad-sdk-laravel.environment', 'testing');
    }
}
