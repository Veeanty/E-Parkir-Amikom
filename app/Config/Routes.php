<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Web');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Web::index');

$routes->get('/register', 'Auth::register');
$routes->get('auth/logout', 'Auth::logout');
$routes->get('/login', 'Auth::login');
$routes->post('login', 'Auth::cek_login');
$routes->post('auth/cek_login', 'Auth::cek_login');
$routes->get('/auth/register', 'Auth::register');
$routes->get('/auth/login', 'Auth::login');
$routes->post('/auth/save_register', 'Auth::save_register');
$routes->get('/sukses', 'Auth::register'); // Ganti 'Auth::sukses' dengan metode dan controller yang sesuai
$routes->get('/login', 'Auth::login');
$routes->get('/home', 'Home::index');

//register
// $routes->get('/register', 'RegisterController::index');
// $routes->post('/register', 'RegisterController::store');

$routes->get('parkir', 'ParkirController::index', ['as' => 'parkir']);
$routes->get('profil', 'ProfilController::index', ['as' => 'profil']);
$routes->get('manual', 'ManualController::index', ['as' => 'manual']);
$routes->get('gerbang1', 'Gerbang1Controller::index', ['as' => 'gerbang1']);
$routes->get('gerbang2', 'Gerbang2Controller::index', ['as' => 'gerbang2']);
$routes->get('laporan', 'LaporanController::index', ['as' => 'laporan']);


$routes->get('/kendaraan', 'KendaraanController::index');
$routes->get('/kendaraan/create', 'KendaraanController::create');
$routes->post('/kendaraan/store', 'KendaraanController::store');
$routes->get('/kendaraan/edit/(:num)', 'KendaraanController::edit/$1');
$routes->post('/kendaraan/update/(:num)', 'KendaraanController::update/$1');
$routes->get('/kendaraan/delete/(:num)', 'KendaraanController::delete/$1');





/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
