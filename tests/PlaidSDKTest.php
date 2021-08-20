<?php

namespace Stephenjude\Plaid\Tests;

use Mockery;

class PlaidSDKTest extends TestCase
{
    /** @test */
    public function test_package_class_returns_valid_plaid_sdk_object()
    {
        $plaidWrapperClass = Mockery::mock(\Stephenjude\Plaid\Plaid::class);

        $this->assertInstanceOf(\TomorrowIdeas\Plaid\Plaid::class, $plaidWrapperClass);
    }

    /** @test */
    public function test_package_facade_returns_valid_plaid_sdk_object()
    {
        $plaidWrapperFacade = Mockery::mock(\Stephenjude\Plaid\Facades\Plaid::class);

        $this->assertInstanceOf(\TomorrowIdeas\Plaid\Plaid::class, $plaidWrapperFacade);
    }
}
