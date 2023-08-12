<?php

use Balpom\HttpCacheTtl\TtlContainer;

include dirname(__DIR__) . "/vendor/autoload.php";

$times = new TtlContainer();

$statusCode = 777;
$ttl = 7200;
$times->setTtl($statusCode, $ttl); // HttpCacheException: Unable to set TTL - invalid HTTP status code.
