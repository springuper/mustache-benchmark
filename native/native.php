<?php
require 'benchmark.php';
$data = json_decode(file_get_contents(dirname(__FILE__). '/../data/data.json'), true);

function test_simple()
{
    global $data;
    $story_native = 'templates/story.phtml';
    render($story_native,  $data['story_view']);
}

function test_loop() {
    global $data;
    $comment_native = 'templates/comment.phtml';		
    render($comment_native, $data['comment_view']);
}

function render($template, $view) {
    extract($view);
    ob_start();
    include_once $template;
    $contents = ob_get_contents();
    ob_end_clean();
    return $contents;
}

$simpleResults =  benchmark(10, 10000, 'test_simple');
echo 'Simple Test: ', $simpleResults['time'], 'ms, ', $simpleResults['PhpMemory'], 'byte PHP, ', $simpleResults['RealMemory'], 'byte System',PHP_EOL;
$loopResults =  benchmark(10, 10000, 'test_loop');
echo 'Loop Test: ', $loopResults['time'], 'ms, ', $loopResults['PhpMemory'], 'byte PHP, ', $loopResults['RealMemory'], 'byte System',PHP_EOL;
