<?php
require 'benchmark.php';

function test_simple()
{
    $story_native = 'templates/story.phtml';
    $story_view = array(
        'name' => 'Mustache.js',
        'url' => 'http://github.com/janl/mustache.js',
        'source' => 'git://github.com/janl/mustache.js.git'    	
    );
    render($story_native,  $story_view);
}

function test_loop() {
    $comment_native = 'templates/comment.phtml';		
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
    render($comment_native,  $comment_view);
}

function render($template, $view) {
    extract($view);
    ob_start();
    include $template;
    $contents = ob_get_contents();
    ob_end_clean();
    return $contents;
}

$simpleResults =  benchmark(10, 5000, 'test_simple');
echo 'Simple Test: ', $simpleResults['time'], 'ms, ', $simpleResults['PhpMemory'], 'byte PHP, ', $simpleResults['RealMemory'], 'byte System',PHP_EOL;
$loopResults =  benchmark(10, 5000, 'test_loop');
echo 'Loop Test: ', $loopResults['time'], 'ms, ', $loopResults['PhpMemory'], 'byte PHP, ', $loopResults['RealMemory'], 'byte System',PHP_EOL;
