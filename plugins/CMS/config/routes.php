<?php
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;

Router::plugin(
    'CMS',
    ['path' => '/cms'],
    function (RouteBuilder $routes) {
	
	    $routes->connect('/', ['controller' => 'Dashboard', 'action' => 'index']);
	    $routes->connect('/dashboard', ['controller' => 'Dashboard', 'action' => 'index']);
	    $routes->connect('/settings', ['controller' => 'Dashboard', 'action' => 'settings']);
	    
	    $routes->connect('/login', ['controller' => 'Auth', 'action' => 'login']);
	    $routes->connect('/logout', ['controller' => 'Auth', 'action' => 'logout']);
	    $routes->connect('/register', ['controller' => 'Auth', 'action' => 'register']);
	    $routes->connect('/user_edit', ['controller' => 'Auth', 'action' => 'user_edit']);
    
	    $routes->connect('/pages/*', ['controller' => 'Pages', 'action' => 'display']);
        $routes->fallbacks('DashedRoute');
    }
);
