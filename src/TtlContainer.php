<?php

namespace Balpom\HttpCacheTtl;

class TtlContainer implements HttpCacheTtlInterface
{
    private int $defaultTtl = 3600;
    private array $ttl = [301 => 0, 410 => 0, 414 => 0];

    public function getTtl(int $statusCode): int
    {
        if (!$this->validateStatusCode($statusCode)) {
            throw new HttpCacheTtlException('Unable to get TTL - invalid HTTP status code.');
        }

        return $this->ttl[$statusCode] ?? $this->defaultTtl;
    }

    public function setTtl(int $statusCode, int $ttl): void
    {
        if (!$this->validateStatusCode($statusCode)) {
            throw new HttpCacheTtlException('Unable to set TTL - invalid HTTP status code.');
        }
        if (!$this->validateTtl($ttl)) {
            throw new HttpCacheTtlException('Unable to set TTL for HTTP status code ' . $statusCode . ' - invalid TTL.');
        }
        $this->ttl[$statusCode] = $ttl;
    }

    public function getDefaultTtl(): int
    {
        return $this->defaultTtl;
    }

    public function setDefaultTtl(int $ttl): void
    {
        if (!$this->validateTtl($ttl)) {
            throw new HttpCacheTtlException('Unable to set default TTL - invalid TTL.');
        }
        $this->defaultTtl = $ttl;
    }

    private function validateTtl(int $ttl)
    {
        return $ttl >= 0;
    }

    private function validateStatusCode(int $statusCode)
    {
        return (100 <= $statusCode && 600 > $statusCode);
    }

}
