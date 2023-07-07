<?php

namespace Wolverine\LaravelRedisSentinel\Tests\Unit;

use Mockery;
use Wolverine\LaravelRedisSentinel\RedisSentinel;
use Wolverine\LaravelRedisSentinel\RedisSentinelManager;
use Wolverine\LaravelRedisSentinel\Tests\Support\ApplicationFactory;
use PHPUnit_Framework_TestCase as TestCase;

class RedisSentinelFacadeTest extends TestCase
{
    /**
     * Run this cleanup after each test.
     *
     * @return void
     */
    public function tearDown()
    {
        Mockery::close();
    }

    public function testResolvesFacadeServiceFromContainer()
    {
        $service = RedisSentinelManager::class;
        $app = ApplicationFactory::make();

        $app->singleton('redis-sentinel', function () use ($service) {
            return Mockery::mock($service);
        });

        RedisSentinel::setFacadeApplication($app);

        $this->assertInstanceOf($service, RedisSentinel::getFacadeRoot());
    }
}
