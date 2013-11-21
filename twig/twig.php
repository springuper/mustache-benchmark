<?php
require dirname(__FILE__). '/../benchmark.php';
require dirname(__FILE__). '/../libs/twig/lib/Twig/Autoloader.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem(dirname(__FILE__). '/templates');
$twig = new Twig_Environment($loader, array(
    'cache' => dirname(__FILE__). '/cache',
));

$data = json_decode(file_get_contents(dirname(__FILE__). '/../data/data.json'), true);

function test_simple() {
    global $twig;
    global $data;

    $twig->render('story.html', $data['story_view']);
}

function test_loop() {
    global $twig;
    global $data;

    $twig->render('comment.html', $data['comment_view']);
}

$simpleResults =  benchmark(10, 10000, 'test_simple', true);
echo 'Simple Test: ', $simpleResults['time'], 'ms, ', $simpleResults['PhpMemory'], 'byte PHP, ', $simpleResults['RealMemory'], 'byte System',PHP_EOL;
$loopResults =  benchmark(10, 10000, 'test_loop', true);
echo 'Loop Test: ', $loopResults['time'], 'ms, ', $loopResults['PhpMemory'], 'byte PHP, ', $loopResults['RealMemory'], 'byte System',PHP_EOL;
