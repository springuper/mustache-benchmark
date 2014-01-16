<?php
require dirname(__FILE__). '/../benchmark.php';
require dirname(__FILE__). '/../libs/mustache/src/Mustache/Autoloader.php';
Mustache_Autoloader::register();
$mustache = new Mustache_Engine(array(
    'template_class_prefix' => '__MyTemplates_',
    'cache' => dirname(__FILE__). '/cache',
    'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__).'/templates'),
));
$data = json_decode(file_get_contents(dirname(__FILE__). '/../data/data.json'), true);

// load templates
$tpl_simple = $mustache->loadTemplate('story');
$tpl_loop = $mustache->loadTemplate('comment');

// warm up
$tpl_simple->render($data['story_view']);
$tpl_loop->render($data['comment_view']);

function test_simple() {
    global $tpl_simple;
    global $data;
    $tpl_simple->render($data['story_view']);
}

function test_loop() {
    global $tpl_loop;
    global $data;
    $tpl_loop->render($data['comment_view']);
}

$simpleResults =  benchmark(10, 10000, 'test_simple', true);
echo 'Simple Test: ', $simpleResults['time'], 'ms, ', $simpleResults['PhpMemory'], 'byte PHP, ', $simpleResults['RealMemory'], 'byte System',PHP_EOL;
$loopResults =  benchmark(10, 10000, 'test_loop', true);
echo 'Loop Test: ', $loopResults['time'], 'ms, ', $loopResults['PhpMemory'], 'byte PHP, ', $loopResults['RealMemory'], 'byte System',PHP_EOL;



