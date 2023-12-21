<?php

use App\Controllers\Auth\CheckRole;
use CodeIgniter\Router\RouteCollection;
use Config\Services;

$routes = Services::routes();
$routes->setAutoRoute(true);
/**
 * @var RouteCollection $routes
 */
$routes->get('/', function () {
  return redirect()->to('/check');
});
$routes->get('/check', [CheckRole::class, 'check_role']);


// noted : role guru belum sempurna