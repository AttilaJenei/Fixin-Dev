<?php
/**
 * @link      http://www.attilajenei.com
 * @copyright Copyright (c) 2016 Attila Jenei
 */

$phpStartMem = memory_get_usage();
$phpStartMemPeak = memory_get_peak_usage();
$phpStartTime = microtime(true);

(function() {
/*
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
    $config = require "{$topPath}/config/{$requestedHost}.php";

    // Autoloader
    require "{$fixinPath}/classes/Fixin/Base/Autoloader/SimpleAutoloader.php";
    $autoloader = new \Fixin\Base\Autoloader\SimpleAutoloader($config['loader']['prefixes']);
*/
    $application = include '../../Fixin/cheats/web.php';
    // Application
//     $application = new \Fixin\Application\Application($config);
    $application->run();

})();

echo 'Run: ' . number_format((microtime(true) - $phpStartTime) * 1000, 4) . 'ms, ' . (memory_get_usage() - $phpStartMem) . ' / ' . (memory_get_peak_usage() - $phpStartMemPeak) . ' bytes', '<br />';
