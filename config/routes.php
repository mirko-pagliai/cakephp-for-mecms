<?php

use Cake\Core\Plugin;
use Cake\Routing\Router;

Router::defaultRouteClass('DashedRoute');

Router::scope('/', function ($routes) {
    //Connect catchall routes for all controllers
    $routes->fallbacks('DashedRoute');
});

//Load all plugin routes
Plugin::routes();