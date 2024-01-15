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
$routes->setDefaultController('Home');
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
$routes->get('/', 'Home::home');
// $routes->get('/home', 'Home::home');

// Admin Route
$routes->get('/admin/dashboard', 'Admin\DashboardController::index'); //admin dashboard
$routes->get('/admin/turnamen/index', 'Admin\Tournament::index'); //admin Turney list
$routes->get('/admin/customer/index', 'Admin\Customer::index'); // open admin customer data
$routes->get('/admin/transaksi/index', 'Admin\Transaksi::index'); //admin history data from API midtrans

// testing payment success
$routes->get('/paymentsukses', 'Payment::addTransaction'); 
//$routes->get('/success', 'Admin\Transaksi::sukses');
//$routes->get('/tes', 'Admin\Tes::index');

$routes->get('/login', 'Home::login');
$routes->post('/auth/login', 'Login::login');
$routes->get('/reg', 'Home::reg');
$routes->post('/reg/add', 'Login::add');
$routes->get('/ww', 'Home::ww');
$routes->get('/form', 'Home::form');
$routes->post('/form/add', 'Formevent::form');
$routes->get('/join', 'Home::join');
$routes->get('/list', 'Home::list');
$routes->get('/event', 'MyEvent::index');
$routes->get('/dt/(:any)', 'DetailEvent::peserta/$1');
$routes->get('/dtt/(:any)', 'DetailEvent::index/$1');
$routes->get('/list/(:any)', 'DetailEvent::list/$1');
$routes->get('/setting', 'Home::setting');
$routes->get('/logout', 'Login::logout');
$routes->get('/hots', 'Hotss::index');
$routes->post('/join/add', 'join::join');
$routes->post('save-data', 'Jjuara::saveData');
$routes->post('save-data1', 'Jjuara::saveData1');
$routes->post('save-data2', 'Jjuara::saveData2');
$routes->post('save-data3', 'Jjuara::saveData3');
$routes->post('save-data4', 'Jjuara::saveData4');
$routes->post('save-data5', 'Jjuara::saveData5');
$routes->post('save-data6', 'Jjuara::saveData7');
$routes->post('save-data7', 'Jjuara::saveData8');
$routes->post('save-data8', 'Jjuara::saveData6');

$routes->get('/admin/dashboard', 'Admin\DashboardController::index');
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
