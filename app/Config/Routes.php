<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//load separate route file
require APPPATH . 'Routes/socialRoutes.php';