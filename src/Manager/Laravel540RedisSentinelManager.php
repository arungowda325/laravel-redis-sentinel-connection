<?php

namespace Wolverine\LaravelRedisSentinel\Manager;

use Wolverine\LaravelRedisSentinel\Manager\VersionedRedisSentinelManager;

/**
 * Enables Laravel's Redis database driver to accept configuration options for
 * Redis Sentinel connections independently. Supports Laravel versions up to
 * 5.4.19.
 *
 * @category Package
 * @package  Wolverine\LaravelRedisSentinel
 * @author   Cy Rossignol <cy@rossignols.me>
 * @license  See LICENSE file
 * @link     http://github.com/arungowda325/laravel-redis-sentinel-connection
 */
class Laravel540RedisSentinelManager extends VersionedRedisSentinelManager
{
    /**
     * Get the Redis Connection instance represented by the specified name
     *
     * @param string $name The name of the connection as defined in the
     * configuration
     *
     * @return \Illuminate\Redis\Connections\PredisConnection The configured
     * Redis Connection instance
     *
     * @throws InvalidArgumentException If attempting to initialize a Redis
     * Cluster connection
     * @throws InvalidArgumentException If the specified connection is not
     * defined in the configuration
     */
    protected function resolve($name)
    {
        return $this->resolveConnection($name);
    }
}
