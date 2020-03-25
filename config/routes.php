<?php
declare(strict_types=1);

use Cake\Http\Middleware\CsrfProtectionMiddleware;
use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;

/** @var \Cake\Routing\RouteBuilder $routes */
$routes->setRouteClass(DashedRoute::class);

$routes->scope('/', function (RouteBuilder $builder) {
    $builder->registerMiddleware('csrf', new CsrfProtectionMiddleware(['httpOnly' => true]));
    $builder->applyMiddleware('csrf');
    $builder->fallbacks();
});
