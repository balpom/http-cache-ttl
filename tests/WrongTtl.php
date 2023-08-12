<?php

use Balpom\HttpCacheTtl\TtlContainer;

include dirname(__DIR__) . "/vendor/autoload.php";

$times = new TtlContainer();

$statusCode = 200;
$ttl = -100;
$times->setTtl($statusCode, $ttl); // HttpCacheException: Unable to set TTL for HTTP status code 200 - invalid TTL.
