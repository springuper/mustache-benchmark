<?php
// based on methodology developed by PPK:
// http://www.quirksmode.org/blog/archives/2009/08/when_to_read_ou.html
function benchmark($times, $runner_times, $func, $clear_cache = false)
{
    $results = array();
    while ($times != 0){
        if ($clear_cache) exec('rm -f mustache/cache/__*; rm -f smarty/compiles/*; rm -f twig/cache/*', $result, $return);
        $results[] = runner($runner_times, $func);
        $times--;
    }

	$time = 0;
	$phpMemory = 0;
	$realMemory = 0;
	foreach ($results as $result) {
		$time += $result['time'];
		$phpMemory += $result['PhpMemory'];
		$realMemory += $result['RealMemory'];
	}
	return array(
		'time' => $time/count($results),
		'PhpMemory' => $phpMemory/count($results),
		'RealMemory' => $realMemory/count($results),
	);
}

function runner($times, $func)
{
	$startTime = millitime();
	$startPhpMemory = memory_get_usage();
	$startRealMemory = memory_get_usage(TRUE);
    while ($times != 0){
        $func();
        $times--;
    }

	$endTime = millitime();
	$endPhpMemory = memory_get_usage();
	$endRealMemory = memory_get_usage(TRUE);
	return array(
		'time' => $endTime - $startTime,
		'PhpMemory' => $endPhpMemory - $startPhpMemory,
		'RealMemory' => $endRealMemory - $startRealMemory,
	);
}

function millitime() {
	return microtime(TRUE) * 1000;
}
