<?php
/**
 * Fixin Framework
 *
 * Copyright (c) Attila Jenei
 *
 * http://www.fixinphp.com
 */

// Check host is allowed
$hosts = ['www.fixin-dev.attila'];
$requestedHost = $_SERVER['SERVER_NAME'];

if (!in_array($requestedHost, $hosts)) {
    header("HTTP/1.1 404 Not Found");
    echo '<!DOCTYPE html><html><body><h1>Not Found</h1></body></html>';

    exit;
}

// Load config
$topPath = dirname(__DIR__);

return require "{$topPath}/config/{$requestedHost}.php";
