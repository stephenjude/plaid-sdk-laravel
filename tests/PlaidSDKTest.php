<?php

namespace Stephenjude\Plaid\Tests;

use Mockery;
use Stephenjude\Plaid\Plaid;

class PlaidSDKTest extends TestCase
{
    /** @test */
    public function test_package_class_returns_valid_plaid_sdk_object()
    {
        $plaidWrapperClass = Mockery::mock(Plaid::class);

        $this->assertInstanceOf(\Stephenjude\PlaidSDK\Plaid::class, $plaidWrapperClass);
    }
}
