<?php
require 'benchmark.php';
require 'libs/mustache/src/Mustache/Autoloader.php';
Mustache_Autoloader::register();

function test_simple() {
    $story_native = 'templates/story.mustache';
    $story_view = array(
        'name' => 'Mustache.js', 
        'url' => 'http://github.com/janl/mustache.js',
        'source' => 'git://github.com/janl/mustache.js.git',
    );

    $m = new Mustache_Engine();
    $m->render(file_get_contents($story_native), $story_view);
}

function test_loop() {
    $comment_native = 'templates/comment.mustache';		
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

    $m = new Mustache_Engine();
    $m->render(file_get_contents($comment_native), $comment_view);
}

$simpleResults =  benchmark(10, 5000, 'test_simple');
echo 'Simple Test: ', $simpleResults['time'], 'ms, ', $simpleResults['PhpMemory'], 'byte PHP, ', $simpleResults['RealMemory'], 'byte System',PHP_EOL;
$loopResults =  benchmark(10, 5000, 'test_loop');
echo 'Loop Test: ', $loopResults['time'], 'ms, ', $loopResults['PhpMemory'], 'byte PHP, ', $loopResults['RealMemory'], 'byte System',PHP_EOL;
