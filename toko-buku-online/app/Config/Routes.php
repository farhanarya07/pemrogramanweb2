<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('chart', 'Home::chart');
$routes->get('checkout', 'Home::checkout');
$routes->get('search', 'Home::search');
$routes->post('submit', 'Home::submit');
$routes->get('admin/dashboard', 'Home::dashboard');


service('auth')->routes($routes);
$routes->post('submit', 'Home::submit');
