<?php
require dirname(__FILE__). '/../benchmark.php';
require dirname(__FILE__). '/../libs/smarty/Smarty.class.php';
$smarty = new Smarty();

$smarty->setTemplateDir(dirname(__FILE__). '/templates');
$smarty->setCompileDir(dirname(__FILE__). '/compiles');
$smarty->setCacheDir(dirname(__FILE__). '/cache');

$data = json_decode(file_get_contents(dirname(__FILE__). '/../data/data.json'), true);

function test_simple() {
    global $smarty;
    global $data;
    $story_native = dirname(__FILE__). '/templates/story.tpl';

    $smarty->assign($data['story_view']);
    $smarty->fetch($story_native);
}

function test_loop() {
    global $smarty;
    global $data;
    $comment_native = dirname(__FILE__). '/templates/comment.tpl';

    $smarty->assign($data['comment_view']);
    $smarty->fetch($comment_native);
}

$simpleResults =  benchmark(10, 10000, 'test_simple', true);
echo 'Simple Test: ', $simpleResults['time'], 'ms, ', $simpleResults['PhpMemory'], 'byte PHP, ', $simpleResults['RealMemory'], 'byte System',PHP_EOL;
$loopResults =  benchmark(10, 10000, 'test_loop', true);
echo 'Loop Test: ', $loopResults['time'], 'ms, ', $loopResults['PhpMemory'], 'byte PHP, ', $loopResults['RealMemory'], 'byte System',PHP_EOL;
