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

$routes->get('/profile/fasilitas', 'ProfileController::indexFacilities');
$routes->get('/profile/kepala-sekolah', 'ProfileController::indexHeadmaster');
$routes->get('/profile/sejarah', 'ProfileController::indexHistory');
$routes->get('/profile/tenaga-kependidikan', 'ProfileController::indexTendikProfile');
$routes->get('/profile/visi-dan-misi', 'ProfileController::indexVisionAndMission');

$routes->get('/profile/guru', 'TeacherController::indexTeacher');
$routes->get('/profile/detail-guru', 'TeacherController::detailTeacher');

$routes->get('/profile/prestasi', 'AchievementController::indexAchievement');
$routes->get('/profile/detail-prestasi', 'AchievementController::detailAchievement');

$routes->get('/akademik/peraturan-sekolah', 'AcademicController::indexRules');
$routes->get('/akademik/daftar-siswa', 'AcademicController::indexStudentsList');
$routes->get('/akademik/tata-tertib', 'AcademicController::indexTataTertib');
$routes->get('/akademik/kalender', 'AcademicController::indexCalender');

$routes->get('/kegiatan', 'ActivityController::indexActivity');
$routes->get('/detail-kegiatan', 'ActivityController::detailActivity');

$routes->get('/gallery', 'GalleryController::detailGallery');




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
