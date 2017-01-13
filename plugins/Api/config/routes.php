<?php
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;

Router::plugin(
    'Api',
    ['path' => '/api'],
    function (RouteBuilder $routes) {
	
	    $routes->connect('/', ['controller' => 'Home', 'action' => 'index']);
	    $routes->connect('/submit/*', ['controller' => 'Home', 'action' => 'index']);

        $routes->fallbacks('DashedRoute');
    }
);
