<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
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
$routes->get('/', 'PageController::index');

// menu Profile
$routes->get('/profile', 'PageController::profile');		//kepala sekolah		//pendidik
$routes->get('/profile_kependidikan', 'PageController::profile_tu');		//pendidik
$routes->get('/sejarah', 'PageController::history');		//pendidik
$routes->get('/visi&misi', 'PageController::visi_misi');		//pendidik
$routes->get('/prestasi', 'PageController::prestasi');		//pendidik

// menu Akademik
$routes->get('/rules', 'AkademikController::rules');

// menu Kegiatan adiwiyata
$routes->get('/adiwiyata', 'AdiwiyataController::index');
$routes->get('/detail_adiwiyata', 'AdiwiyataController::detail');			//detail artikel

// menu Kegiatan ekstrakulikuler
$routes->get('/ekstrakulikuler', 'ExtraController::index');
$routes->get('/detail_ekstrakulikuler', 'ExtraController::detail');			//detail artikel

// menu Kegiatan kreasi dan inovasi
$routes->get('/kreasi', 'CreationController::index');
$routes->get('/detail_kreasi', 'CreationController::detail');			//detail artikel

// menu Profile Guru
$routes->get('/guru', 'TeachersController::index');
$routes->get('/detail_guru', 'TeachersController::detail');

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
