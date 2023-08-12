<?php

namespace Balpom\HttpCacheTtl;

/**
 * Interface for getting and setting common and individual TTLs
 * for different HTTP response status codes.
 *
 * @author Mikhail (Balpom)
 */
interface HttpCacheTtlInterface
{

    /**
     * Get TTL time for HTTP status code.
     */
    public function getTtl(int $statusCode): int;

    /**
     * Set TTL time for HTTP status code.
     * TTL time must be not negative.
     */
    public function setTtl(int $statusCode, int $ttl): void;

    /**
     * Get default TTL time.
     */
    public function getDefaultTtl(): int;

    /**
     * Get default TTL time.
     * TTL time must be not negative.
     */
    public function setDefaultTtl(int $ttl): void;
}
