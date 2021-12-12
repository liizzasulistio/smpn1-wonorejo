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

//Profile
$routes->get('/', 'ViewController::index');
$routes->get('/sejarah', 'ViewController::history');
$routes->get('/visi-dan-misi', 'ViewController::visionMission');
$routes->get('/fasilitas', 'ViewController::facility');
$routes->get('/tenaga-pendidik', 'ViewController::teacherIndex');
$routes->match(['get', 'post'], '/tenaga-pendidik/(:segment)', 'ViewController::teacherDetail/$1');





$routes->get('/kegiatan', 'ViewController::activityIndex');
$routes->get('/galeri', 'ViewController::galleryIndex');
$routes->match(['get', 'post'], '/kegiatan/(:segment)', 'ViewController::activityDetail/$1');

//Login and Logout
$routes->match(['get', 'post'], '/login', 'AuthController::login');
$routes->get('/logout', 'AuthController::logout');

//Dashboard
$routes->get('/dashboard', 'AdminController::dashboard');

//User Management
$routes->get('/pengguna', 'AuthController::index');
$routes->match(['get', 'post'], '/pengguna/create', 'AuthController::create');
$routes->match(['get', 'post'], '/save-user', 'AuthController::save');
$routes->get('/pengguna/update/(:segment)', 'AuthController::update/$1');
$routes->match(['get', 'post'], '/save-user-update/(:segment)', 'AuthController::edit/$1');
$routes->get('/delete-user/(:segment)', 'AuthController::delete/$1');

// Profile Management
// History
$routes->get('/admin/sejarah', 'ProfileController::history');
$routes->match(['get', 'post'], '/save-profile', 'ProfileController::save');
$routes->match(['get', 'post'], '/update-history/(:segment)', 'ProfileController::updateHistory/$1');
$routes->get('/delete-history/(:segment)', 'ProfileController::deleteHistory/$1');

// Vision and Mission
$routes->get('/admin/visi-misi', 'ProfileController::index');
$routes->match(['get', 'post'],'/admin/visi-misi/create', 'ProfileController::create');
$routes->get('/admin/visi-misi/(:segment)', 'ProfileController::read/$1');
$routes->get('/delete-profile/(:segment)', 'ProfileController::delete/$1');
$routes->match(['get', 'post'], '/admin/visi-misi/update/(:segment)', 'ProfileController::update/$1');
$routes->match(['get', 'post'], '/save-profile-update/(:segment)', 'ProfileController::edit/$1');

// Facility
$routes->get('/admin/fasilitas', 'FacilityController::index');
$routes->match(['get', 'post'], '/admin/fasilitas/create', 'FacilityController::create');
$routes->match(['get', 'post'], '/save-facility', 'FacilityController::save');
$routes->get('/admin/fasilitas/(:segment)', 'FacilityController::read/$1');
$routes->match(['get', 'post'], '/admin/fasilitas/update/(:segment)', 'FacilityController::update/$1');
$routes->match(['get', 'post'], '/save-facility-update/(:segment)', 'FacilityController::edit/$1');
$routes->get('/delete-facility/(:segment)', 'FacilityController::delete/$1');



//Activity Management
$routes->get('/admin/kegiatan', 'ActivityController::index');
$routes->match(['get', 'post'], '/admin/kegiatan/create', 'ActivityController::create');
$routes->match(['get', 'post'], '/save-activity', 'ActivityController::save');
$routes->get('/admin/kegiatan/(:segment)', 'ActivityController::read/$1');
$routes->get('/delete-activity/(:segment)', 'ActivityController::delete/$1');
$routes->match(['get', 'post'], '/admin/kegiatan/update/(:segment)', 'ActivityController::update/$1');
$routes->match(['get', 'post'], '/save-activity-update/(:segment)', 'ActivityController::edit/$1');

//Teacher & Headmaster Management
$routes->get('/admin/tenaga-pendidik', 'TeacherController::index');
$routes->get('/admin/kepala-sekolah', 'TeacherController::indexHeadmaster');
$routes->match(['get', 'post'], '/admin/tenaga-pendidik/create', 'TeacherController::create');
$routes->match(['get', 'post'], '/save-teacher', 'TeacherController::save');
$routes->get('/admin/tenaga-pendidik/(:segment)', 'TeacherController::read/$1');
$routes->match(['get', 'post'], '/admin/tenaga-pendidik/update/(:segment)', 'TeacherController::update/$1');
$routes->match(['get', 'post'], '/save-teacher-update/(:segment)', 'TeacherController::edit/$1');
$routes->match(['get', 'post'], '/admin/kepala-sekolah/update/(:segment)', 'TeacherController::updateHeadmaster/$1');
$routes->match(['get', 'post'], '/save-headmaster-update/(:segment)', 'TeacherController::edit/$1');
$routes->get('/delete-teacher/(:segment)', 'TeacherController::delete/$1');
$routes->get('/delete-headmaster/(:segment)', 'TeacherController::deleteHeadmaster/$1');

//Staff Management
$routes->get('/admin/tenaga-kependidikan', 'StaffController::index');
$routes->match(['get', 'post'], '/admin/tenaga-kependidikan/create', 'StaffController::create');
$routes->match(['get', 'post'], '/save-staff', 'StaffController::save');
$routes->get('/admin/tenaga-kependidikan/(:segment)', 'StaffController::read/$1');
$routes->match(['get', 'post'], '/admin/tenaga-kependidikan/update/(:segment)', 'StaffController::update/$1');
$routes->match(['get', 'post'], '/save-staff-update/(:segment)', 'StaffController::edit/$1');
$routes->get('/delete-staff/(:segment)', 'StaffController::delete/$1');

//Comment Management
$routes->get('/admin/komentar', 'CommentController::index');
$routes->match(['get', 'post'], '/save-comment', 'CommentController::save');
$routes->match(['get', 'post'], '/save-comment-update/(:segment)', 'CommentController::edit/$1');
$routes->get('/delete-comment/(:segment)', 'CommentController::delete/$1');

//Gallery Management
$routes->get('/admin/galeri', 'GalleryController::index');

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
