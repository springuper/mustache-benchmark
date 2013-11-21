<?php
require dirname(__FILE__). '/../benchmark.php';
require dirname(__FILE__). '/../libs/mustache/src/Mustache/Autoloader.php';
Mustache_Autoloader::register();
$mustache = new Mustache_Engine();
$data = json_decode(file_get_contents(dirname(__FILE__). '/../data/data.json'), true);

function test_simple() {
    global $mustache;
    global $data;
    $story_native = dirname(__FILE__). '/templates/story.mustache';
    $mustache->render(file_get_contents($story_native), $data['story_view']);
}

function test_loop() {
    global $mustache;
    global $data;
    $comment_native = dirname(__FILE__). '/templates/comment.mustache';		
    $mustache->render(file_get_contents($comment_native), $data['comment_view']);
}

$simpleResults =  benchmark(10, 10000, 'test_simple');
echo 'Simple Test: ', $simpleResults['time'], 'ms, ', $simpleResults['PhpMemory'], 'byte PHP, ', $simpleResults['RealMemory'], 'byte System',PHP_EOL;
$loopResults =  benchmark(10, 10000, 'test_loop');
echo 'Loop Test: ', $loopResults['time'], 'ms, ', $loopResults['PhpMemory'], 'byte PHP, ', $loopResults['RealMemory'], 'byte System',PHP_EOL;
