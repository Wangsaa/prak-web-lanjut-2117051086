<?php

use App\Controllers\UserController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/profile', 'Home::profile');
$routes->get('/user/profile','UserController::profile');
$routes->get('/user/create','UserController::create');
$routes->post('/user/store','UserController::store');
$routes->get('/user','UserController::index');
$routes->get('/user/(:any)','UserController::show/$1');