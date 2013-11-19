<?php
require dirname(__FILE__). '/../benchmark.php';
require dirname(__FILE__). '/../libs/smarty/Smarty.class.php';
$smarty = new Smarty();

$smarty->setTemplateDir(dirname(__FILE__). '/templates');
$smarty->setCompileDir(dirname(__FILE__). '/compiles');
$smarty->setCacheDir(dirname(__FILE__). '/cache');

function test_simple() {
    global $smarty;
    $story_native = dirname(__FILE__). '/templates/story.tpl';
    $story_view = array(
        'name' => 'Mustache.js', 
        'url' => 'http://github.com/janl/mustache.js',
        'source' => 'git://github.com/janl/mustache.js.git',
    );

    $smarty->assign($story_view);
    $smarty->fetch($story_native);
}

function test_loop() {
    global $smarty;
    $comment_native = dirname(__FILE__). '/templates/comment.tpl';
    $comment_view = array(
        'header' => "My Post Comments",
        'comments' => array(
            array('name' => "Joe", 'body' => "Thanks for this post!"),
            array('name' => "Sam", 'body' => "Thanks for this post!"),
            array('name' => "Heather", 'body'=> "Thanks for this post!"),
            array('name' => "Kathy", 'body' =>"Thanks for this post!"),
            array('name' => "George", 'body'=>"Thanks for this post!"),	        	
        )
    );

    $smarty->assign($comment_view);
    $smarty->fetch($comment_native);
}

$simpleResults =  benchmark(10, 10000, 'test_simple', true);
echo 'Simple Test: ', $simpleResults['time'], 'ms, ', $simpleResults['PhpMemory'], 'byte PHP, ', $simpleResults['RealMemory'], 'byte System',PHP_EOL;
$loopResults =  benchmark(10, 10000, 'test_loop', true);
echo 'Loop Test: ', $loopResults['time'], 'ms, ', $loopResults['PhpMemory'], 'byte PHP, ', $loopResults['RealMemory'], 'byte System',PHP_EOL;
