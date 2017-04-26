<?php
/**
 * @link      http://www.attilajenei.com
 * @copyright Copyright (c) 2016 Attila Jenei
 */

$phpStartMem = memory_get_usage();
$phpStartMemPeak = memory_get_peak_usage();
$phpStartTime = microtime(true);

(function() {
    $config = include dirname(__DIR__) . '/config/loader.php';

    $application = include "{$fixinPath}/cheats/web.php";
    $application->run();
})();

echo '<pre>---<br />';
echo 'Execution time:   ' . number_format((microtime(true) - $phpStartTime) * 1000, 4) . 'ms<br />';
echo 'Memory usage:     ' . (memory_get_usage() - $phpStartMem) . ' / ' . (memory_get_peak_usage() - $phpStartMemPeak) . ' bytes', '<br />';

$includedFiles = get_included_files();

$last = '';
$list = [];

foreach ($includedFiles as $file) {
    $path = dirname($file) . '/';
    $length = mb_strlen($path);
    $padding = false;

    while ($path !== mb_substr($last, 0, $length)) {
        $path = dirname($path) . '/';
        $diff = $length - mb_strlen($path);

        if ($diff) {
            $length -= $diff;
            $padding = true;
            continue;
        }

        $length = 0;
        break;
    }

    if ($padding) {
        $list[] = '';
    }

    $list[] = str_repeat(' ', $length) . mb_substr($file, $length);
    $last = $file;
}

echo 'Included files:   ' . count($includedFiles) . '<br />                  ';
echo implode("<br />                  ", $list);
echo '</pre>';
