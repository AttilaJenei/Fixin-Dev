<?php
/**
 * @link       http://www.attilajenei.com
 * @copyright  Copyright (c) 2016 Attila Jenei
 */

if ($_POST) {
    $phpStartMem = memory_get_usage();
    $phpStartMemPeak = memory_get_peak_usage();
    $phpStartTime = microtime(true);

    $config = include dirname(__DIR__) . '/config/loader.php';

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
		<form method="post" enctype="multipart/form-data">
			<input type="text" name="name" value="John Jemson"><br />
			<input type="text" name="city" value="London"><br />
			<input type="email" name="email" value="john.jemson@example.com"><br />
            <input type="file" name="singleFile" /><br />
            <input type="file" name="singleFileArray[az][1]" /><br />
            <input type="file" name="multiFile[]" multiple="multiple" /><br />
            <input type="file" name="multiFileArray[hah][2][]" multiple="multiple" /><br />
            <button type="submit">Submit</button>
		</form>

	</body>
</html>
