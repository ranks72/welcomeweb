<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setAutoRoute(true);
$routes->get('/', 'Home::index');
$routes->get('/index', 'Coba::index');
$routes->get('/about/(:any)/(:num)', 'Coba::about/$1/$2');
$routes->get('/admin', 'users\Admin::adminUser');
