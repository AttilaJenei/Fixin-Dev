<?php
/**
 * @link      http://www.attilajenei.com
 * @copyright Copyright (c) 2016 Attila Jenei
 */

$phpStartTime = microtime(true);

// Config
$hosts = array('www.fixin-dev.attila');
if (!in_array($_SERVER['HTTP_HOST'], $hosts)) {
    header("HTTP/1.1 404 Not Found");
    
    exit;
}

// Application
$application = new Fixin\Appplication($config);
$application->run();

echo 'Run time: ' . $phpStartTime - microtime(true) . 'ms';