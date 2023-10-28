<?php

use App\Controllers\UserController;
use App\Controllers\KelasController;
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
$routes->get('/user/(:any)/edit',[UserController::class,'edit']);
$routes->put('/user/(:any)',[UserController::class,'update']);
$routes->delete('/user/(:any)', 'UserController::destroy/$1/$2/$3');

// $routes->get('/kelas','UserController::kelas');
$routes->get('/user/(:any)','UserController::show/$1');
$routes->get('/kelas/create', [KelasController::class,'create']);
$routes->post('/kelas/store',[KelasController::class, 'store']);
$routes->get('/kelas', 'KelasController::index');
$routes->get('/kelas/(:any)/edit', [KelasController::class, 'edit']);
$routes->put('/kelas/(:any)', [KelasController::class, 'update']);
$routes->delete('/kelas/(:any)', [KelasController::class, 'destroy']);
$routes->get('kelas/(:any)', [kelasController::class, 'show']);
