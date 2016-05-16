<?php
/**
 * @link       http://www.attilajenei.com
 * @copyright  Copyright (c) 2016 Attila Jenei
 */

if ($_POST) {
    $phpStartMem = memory_get_usage();
    $phpStartMemPeak = memory_get_peak_usage();
    $phpStartTime = microtime(true);

    $application = include '../../Fixin/cheats/web.php';
    $application->run();

    echo 'Run: ' . number_format((microtime(true) - $phpStartTime) * 1000, 4) . 'ms, ' . (memory_get_usage() - $phpStartMem) . ' / ' . (memory_get_peak_usage() - $phpStartMemPeak) . ' bytes';

    exit;
}
?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body onload="loaded()">
		<form method="post">
			<input type="text" name="name" value="John Jemson">
			<input type="text" name="city" value="London">
			<input type="email" name="email" value="john.jemson@example.com">
		</form>
		<script>
			function loaded() {
				document.querySelector('form').submit()
			}
		</script>
	</body>
</html>