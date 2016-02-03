<?php

use Cake\Core\Plugin;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;

Router::defaultRouteClass('DashedRoute');

Router::scope('/', function (RouteBuilder $routes) {
    //Connect catchall routes for all controllers
    $routes->fallbacks('DashedRoute');
});

//Load all plugin routes
Plugin::routes();