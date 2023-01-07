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
$routes->get('/', 'Home::index');
$routes->get('/About_Us', 'Home::about_us');
$routes->get('/Kontak', 'Home::contact');

// Catalogue
$routes->get('/Katalog', 'Catalogue::index');
$routes->get('/Katalog/(:any)', 'Catalogue::produk/$1');
$routes->get('/Produk/(:any)', 'Catalogue::produk/$1');
$routes->post('/Cek_harga', 'Catalogue::cek_harga');
$routes->post('/Katalog', 'Catalogue::filter');

// BLOG
$routes->get('/Blog', 'Blog::index');
$routes->get('/Blog/(:any)', 'Blog::dtl_blog/$1');

// Comment Blog
$routes->post('/Add_Comment', 'Comment::add_comnt');

// DASHBOARD
$routes->get('/Dashboard', 'Dashboard::index', ['filter' => 'role:admin,super_admin']);
$routes->get('/My_profile', 'Dashboard::my_profile', ['filter' => 'role:admin,super_admin']);

// BLOG Dashboard
$routes->get('/My_Blog', 'Blog::show_all_blog', ['filter' => 'role:admin,super_admin']);
$routes->get('/Created_Blog', 'Blog::form_add_blog', ['filter' => 'role:admin,super_admin']);
$routes->post('/Created_Blog', 'Blog::created_blog', ['filter' => 'role:admin,super_admin']);
$routes->get('/Updated_Blog/(:any)', 'Blog::form_updt_blog/$1', ['filter' => 'role:admin,super_admin']);
$routes->post('/Updated_Blog', 'Blog::updated_blog', ['filter' => 'role:admin,super_admin']);

// Estimasi
$routes->post('/warna', 'Catalogue::warna');

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
