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
$routes->get('/', 'PageController::index');
$routes->get('/', 'PageController::index2');

$routes->match(['get', 'post'], '/login', 'AuthController::login');

$routes->get('/dashboard', 'PageController::dashboard');
// menu Profile
$routes->get('/kepala-sekolah', 'PageController::profile');		//kepala sekolah		
$routes->get('/tenaga-kependidikan', 'PageController::profile_tu');		//pendidik
$routes->get('/sejarah', 'PageController::history');		
$routes->get('/visi-dan-misi', 'PageController::visi_misi');
$routes->get('/fasilitas', 'PageController::fasilitas');

// prestasi
$routes->get('/prestasi', 'PageController::prestasi');		
$routes->get('/detail-prestasi', 'PageController::detail_prestasi');		
		
// menu Akademik
$routes->get('/peraturan-akademik', 'AkademikController::rules');
$routes->get('/daftar-siswa', 'AkademikController::students');
$routes->get('/tata-tertib', 'AkademikController::tatatertib');
$routes->get('/kalender-akademik', 'AkademikController::kalender');

// menu Kegiatan adiwiyata
$routes->get('/adiwiyata', 'AdiwiyataController::index');
$routes->get('/detail-adiwiyata', 'AdiwiyataController::detail');			//detail artikel

// menu Kegiatan ekstrakulikuler
$routes->get('/ekstrakulikuler', 'ExtraController::index');
$routes->get('/detail-ekstrakulikuler', 'ExtraController::detail');			//detail artikel

// menu Kegiatan kreasi dan inovasi
$routes->get('/kreasi-dan-inovasi', 'CreationController::index');
$routes->get('/detail-kreasi-dan-inovasi', 'CreationController::detail');			//detail artikel

// menu Profile Guru
$routes->get('/tenaga-pendidik', 'TeachersController::index');
$routes->get('/detail-tenaga-pendidik', 'TeachersController::detail');

// ppdb hasil seleksi
$routes->get('/hasil-seleksi', 'PageController::seleksippdb');

// galery
$routes->get('/galleri', 'PageController::galeri');

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
