<?php

use Balpom\HttpCacheTtl\TtlContainer;

include dirname(__DIR__) . "/vendor/autoload.php";

$times = new TtlContainer();

$statusCode = 200;
$ttl = $times->getTtl($statusCode);
echo $ttl . PHP_EOL; // 3600

echo $times->getDefaultTtl() . PHP_EOL; // 3600

$times->setDefaultTtl(1800);
$ttl = $times->getTtl($statusCode);
echo $ttl . PHP_EOL; // 1800

$times->setTtl($statusCode, 7200);
$ttl = $times->getTtl($statusCode);
echo $ttl . PHP_EOL; // 7200

$statusCode = 410;
$ttl = $times->getTtl($statusCode);
echo $ttl . PHP_EOL; // 0

// HttpCacheException: Unable to set TTL for HTTP status code 200 - invalid TTL.
