<?php

namespace Config;

$routes = Services::routes();

//Abhinav Shukla routes start
$routes->group('social/', ['namespace' => 'App\Controllers'], static function ($routes) {
    $routes->get('form', 'validation::index');
    $routes->post('submit', 'validation::submit');
});
//Abhinav Shukla routes end 