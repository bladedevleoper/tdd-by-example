<?php

use App\Classes\TestClass;

require __DIR__ . '../../vendor/autoload.php';

require __DIR__ . '../../app/Helpers/globalfunctions.php';

$name = 'James';
$environment = 'a php container with docker';
// look at setting up a global exception handler and test it out
$test = new TestClass("hello, running {$environment} built by {$name}");

echo $test->shout();

use App\Router\Router;

Router::post('test', 'testcontroller');
Router::post('test', 'testcontroller');