<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

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

//Admin
$routes->get('/', 'Home::index');
$routes->get('/login', 'SimController::index');
$routes->get('/dashboard','SimController::dashboard');
$routes->get('/kegiatan', 'SimController::kegiatan');
$routes->get('/pengumuman','SimController::pengumuman');
$routes->get('/profile', 'SimController::profile');
$routes->get('/berita', 'SimController::berita');
$routes->get('/kasmasuk', 'SimController::kasmasuk');
$routes->get('/ckasmasuk', 'SimController::ckasmasuk');
$routes->post('/storeksm', 'CRUDController::storeksm');
$routes->get('/kaskeluar', 'SimController::kaskeluar');
$routes->get('/ckaskeluar', 'SimController::ckaskeluar');
$routes->post('/storeksl', 'CRUDController::storeksl');
$routes->get('/zakat', 'SimController::zakat');
$routes->get('/czakat', 'SimController::czakat');
$routes->post('/storezkt', 'CRUDController::storezkt');
$routes->get('/total', 'SimController::total');
$routes->get('/ctotal', 'SimController::ctotal');
$routes->post('/storettl', 'CRUDController::storettl');
$routes->post('/cek-login', 'SimController::cek_login');
$routes->post('/dashboard', 'SimController::dashboard');
$routes->get('/ckegiatan', 'SimController::ckegiatan');
$routes->post('/storekgt', 'CRUDController::storekgt');
$routes->get('/cpengumuman', 'SimController::cpengumuman');
$routes->get('/cberita', 'CRUDController::cberita');
$routes->post('/admin/save-berita', 'CRUDController::save_b');
$routes->post('/storepgn', 'CRUDController::storepgn');
$routes->get('/admin/delete-userk/(:num)', 'SimController::delete_k/$1');
$routes->get('/admin/delete-userp/(:num)', 'SimController::delete_p/$1');
$routes->get('/admin/crud/edit_k/(:num)', 'SimController::edit_k/$1');
$routes->get('/admin/crud/edit_p/(:num)', 'SimController::edit_p/$1');
$routes->get('/admin/crud/edit_b/(:num)', 'CRUDController::edit_b/$1');
$routes->post('/admin/update-userk/(:num)', 'SimController::update_k/$1');
$routes->post('/admin/update-userp/(:num)', 'SimController::update_p/$1');
$routes->post('/admin/update-userb/(:num)', 'CRUDController::update_b/$1');
$routes->get('/admin/delete-userb/(:num)', 'CRUDController::delete_b/$1');
$routes->post('/admin/update-userkm/(:num)', 'CRUDController::update_km/$1');
$routes->get('/admin/crud/edit_km/(:num)', 'CRUDController::edit_km/$1');
$routes->get('/admin/delete-userkm/(:num)', 'CRUDController::delete_km/$1');
$routes->post('/admin/update-userkk/(:num)', 'CRUDController::update_kk/$1');
$routes->get('/admin/crud/edit_kk/(:num)', 'CRUDController::edit_kk/$1');
$routes->get('/admin/delete-userkk/(:num)', 'CRUDController::delete_kk/$1');
$routes->post('/admin/update-userz/(:num)', 'CRUDController::update_z/$1');
$routes->get('/admin/crud/edit_z/(:num)', 'CRUDController::edit_z/$1');
$routes->get('/admin/delete-userz/(:num)', 'CRUDController::delete_z/$1');
$routes->post('/admin/update-usert/(:num)', 'CRUDController::update_t/$1');
$routes->get('/admin/crud/edit_t/(:num)', 'CRUDController::edit_t/$1');
$routes->get('/admin/delete-usert/(:num)', 'CRUDController::delete_t/$1');
$routes->post('/admin/update-profile/(:num)', 'CRUDController::update_profile/$1');



//User
$routes->get('/home', 'User::home');
$routes->get('/kajian', 'User::kajian');
$routes->get('detail-kajian/(:num)', 'User::detail_kajian/$1');
$routes->get('/user-pengumuman', 'User::pengumuman');
$routes->get('detail-pengumuman/(:num)', 'User::detail_pengumuman/$1');
$routes->get('/dakwah', 'User::dakwah');
$routes->get('detail-dakwah/(:num)', 'User::detail_dakwah/$1');
$routes->get('/tes', 'User::tes');


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
