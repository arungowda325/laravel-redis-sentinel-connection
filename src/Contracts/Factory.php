<?php

namespace Wolverine\LaravelRedisSentinel\Contracts;

use Illuminate\Contracts\Redis\Factory as RedisFactoryContract;

/**
 * Executes Redis commands using Sentinel connections.
 *
 * @category Package
 * @package  Wolverine\LaravelRedisSentinel
 * @author   Cy Rossignol <cy@rossignols.me>
 * @license  See LICENSE file
 * @link     https://github.com/arungowda325/laravel-redis-sentinel-connection
 */
interface Factory extends RedisFactoryContract
{
}
