<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index', ['filter' => 'auth']);

$routes->get('login', 'AuthController::login');
$routes->post('login', 'AuthController::login', ['filter' => 'redirect']);
$routes->get('logout', 'AuthController::logout');

$routes->group('produk', ['filter' => 'auth'], function ($routes) { 
    $routes->get('', 'ProdukController::index');
    $routes->post('', 'ProdukController::create');
    $routes->post('edit/(:any)', 'ProdukController::edit/$1');
    $routes->get('delete/(:any)', 'ProdukController::delete/$1');
    $routes->get('download', 'ProdukController::download');
});

$routes->group('produkkategori', ['filter' => 'auth'], function ($routes) { 
    $routes->get('', 'ProdukCategoryController::index');
    $routes->post('', 'ProdukCategoryController::create');
    $routes->post('edit/(:any)', 'ProdukCategoryController::edit/$1');
    $routes->get('delete/(:any)', 'ProdukCategoryController::delete/$1');
});

$routes->group('keranjang', ['filter' => 'auth'], function ($routes) {
    $routes->get('', 'TransaksiController::index');
    $routes->post('', 'TransaksiController::cart_add');
    $routes->post('edit', 'TransaksiController::cart_edit');
    $routes->get('delete/(:any)', 'TransaksiController::cart_delete/$1');
    $routes->get('clear', 'TransaksiController::cart_clear');
});

$routes->get('checkout', 'TransaksiController::checkout', ['filter' => 'auth']);
$routes->post('buy', 'TransaksiController::buy', ['filter' => 'auth']);

$routes->get('get-location', 'TransaksiController::getLocation', ['filter' => 'auth']);
$routes->get('get-cost', 'TransaksiController::getCost', ['filter' => 'auth']);

$routes->get('profile', 'Home::profile', ['filter' => 'auth']);
$routes->get('faq', 'Home::faq', ['filter' => 'auth']);
$routes->get('contact', 'Home::contact', ['filter' => 'auth']);

$routes->group('admin', ['filter' => 'auth'], function($routes) {
    $routes->resource('diskon', ['controller' => 'Admin\Diskon']);
});



$routes->get('api/uas-report', 'ApiController::uasReport');
$routes->resource('api', ['controller' => 'apiController']);
