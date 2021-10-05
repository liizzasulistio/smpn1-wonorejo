<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

//Viewer
$routes->get('/', 'ViewController::index');
$routes->get('/sejarah', 'ViewController::history');
$routes->get('/visi-dan-misi', 'ViewController::visionMission');
$routes->get('/tenaga-pendidik', 'ViewController::teacherIndex');
$routes->match(['get', 'post'], '/tenaga-pendidik/(:segment)', 'ViewController::teacherDetail/$1');
$routes->get('/kegiatan', 'ViewController::activityIndex');
$routes->get('/galeri', 'ViewController::galleryIndex');

//Login and Logout
$routes->match(['get', 'post'], '/login', 'AuthController::login');
$routes->get('/logout', 'AuthController::logout');

//Dashboard
$routes->get('/dashboard', 'AdminController::dashboard');

//User Management
$routes->get('/pengguna', 'AuthController::index');
$routes->match(['get', 'post'], '/pengguna/create', 'AuthController::create');
$routes->match(['get', 'post'], '/save-user', 'AuthController::save');

//Profile Management
//History
$routes->get('/admin/sejarah', 'ProfileController::history');
$routes->match(['get', 'post'], '/save-history', 'ProfileController::saveHistory');
$routes->match(['get', 'post'], '/update-history/(:segment)', 'ProfileController::updateHistory/$1');
$routes->get('/delete-history/(:segment)', 'ProfileController::deleteHistory/$1');

//Rules/Tata tertib Management
$routes->get('/admin/tata-tertib', 'RulesController::index');
$routes->match(['get', 'post'], '/save-rules', 'RulesController::saveRules');
$routes->match(['get', 'post'], '/update-rules/(:segment)', 'RulesController::updateRules/$1');
$routes->get('/delete-rules/(:segment)', 'RulesController::deleteRules/$1');

//Activity Management
$routes->get('/admin/kegiatan', 'ActivityController::index');
$routes->match(['get', 'post'], '/kegiatan/create', 'ActivityController::create');
$routes->match(['get', 'post'], '/save-activity', 'ActivityController::save');
// $routes->get('/kegiatan', 'ActivityController::activityIndex');

//Teacher Management
$routes->get('/admin/tenaga-pendidik', 'TeacherController::index');
$routes->match(['get', 'post'], '/admin/tenaga-pendidik/create', 'TeacherController::create');
$routes->match(['get', 'post'], '/save-teacher', 'TeacherController::save');
$routes->get('/admin/tenaga-pendidik/(:segment)', 'TeacherController::read/$1');
$routes->match(['get', 'post'], '/admin/tenaga-pendidik/update/(:segment)', 'TeacherController::update/$1');
$routes->match(['get', 'post'], '/save-teacher-update/(:segment)', 'TeacherController::edit/$1');
$routes->get('/delete-tenaga-pendidik/(:segment)', 'TeacherController::delete/$1');

//Staff Management
$routes->get('/admin/tenaga-kependidikan', 'StaffController::index');
$routes->match(['get', 'post'], '/admin/tenaga-kependidikan/create', 'StaffController::create');
$routes->match(['get', 'post'], '/save-staff', 'StaffController::save');
$routes->get('/admin/tenaga-kependidikan/(:segment)', 'StaffController::read/$1');
$routes->match(['get', 'post'], '/admin/tenaga-kependidikan/update/(:segment)', 'StaffController::update/$1');
$routes->match(['get', 'post'], '/save-staff-update/(:segment)', 'StaffController::edit/$1');
$routes->get('/delete-tenaga-kependidikan/(:segment)', 'StaffController::delete/$1');

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
