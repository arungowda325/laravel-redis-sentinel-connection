<?php

namespace Wolverine\LaravelRedisSentinel\Manager;

use Wolverine\LaravelRedisSentinel\Manager\VersionedRedisSentinelManager;

/**
 * Enables Laravel's Redis database driver to accept configuration options for
 * Redis Sentinel connections independently. Supports Laravel version 5.4.20
 * and greater.
 *
 * In version 5.4.20, Laravel modified the public interface of the RedisManager
 * class. The visibility of 'RedisManager::resolve()' changed to 'public'.
 *
 * @category Package
 * @package  Wolverine\LaravelRedisSentinel
 * @author   Cy Rossignol <cy@rossignols.me>
 * @license  See LICENSE file
 * @link     http://github.com/arungowda325/laravel-redis-sentinel-connection
 */
class Laravel5420RedisSentinelManager extends VersionedRedisSentinelManager
{
    /**
     * Get the Redis Connection instance represented by the specified name
     *
     * @param string|null $name The name of the connection as defined in the
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
    public function resolve($name = null)
    {
        return $this->resolveConnection($name);
    }
}
