<?php namespace Config;

/**
 * --------------------------------------------------------------------
 * URI Routing
 * --------------------------------------------------------------------
 * This file lets you re-map URI requests to specific controller functions.
 *
 * Typically there is a one-to-one relationship between a URL string
 * and its corresponding controller class/method. The segments in a
 * URL normally follow this pattern:
 *
 *    example.com/class/method/id
 *
 * In some instances, however, you may want to remap this relationship
 * so that a different class/function is called than the one
 * corresponding to the URL.
 *
 */

// Create a new instance of our RouteCollection class.
$routes = Services::routes(true);

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(BASEPATH.'Config/Routes.php'))
{
	require BASEPATH.'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 * The RouteCollection object allows you to modify the way that the
 * Router works, by acting as a holder for it's configuration settings.
 * The following methods can be called on the object to modify
 * the default operations.
 *
 *    $routes->defaultNamespace()
 *
 * Modifies the namespace that is added to a controller if it doesn't
 * already have one. By default this is the global namespace (\).
 *
 *    $routes->defaultController()
 *
 * Changes the name of the class used as a controller when the route
 * points to a folder instead of a class.
 *
 *    $routes->defaultMethod()
 *
 * Assigns the method inside the controller that is ran when the
 * Router is unable to determine the appropriate method to run.
 *
 *    $routes->setAutoRoute()
 *
 * Determines whether the Router will attempt to match URIs to
 * Controllers when no specific route has been defined. If false,
 * only routes that have been defined here will be available.
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('View');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// $routes->set404Override(function() {
// 	echo view('404');die;
// });
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->add('/', 'View::index');
$routes->add('home', 'View::home');
$routes->add('dashboard', 'View::dashboard');
$routes->add('login', 'View::login');
$routes->add('register', 'View::register');
$routes->add('users', 'View::users');
$routes->add('datapengaduan', 'View::datapengaduan');
$routes->add('userprofile', 'View::userprofile');
$routes->add('inputberita', 'View::inputberita');
$routes->add('satuan', 'View::satuan');
$routes->add('beritacovid', 'View::beritacovid');
$routes->add('inputkegiatan', 'View::inputkegiatan');
$routes->add('listpelayanan', 'View::listpelayanan');
$routes->add('laporkerumunan', 'View::laporkerumunan');
$routes->add('mutasi', 'View::mutasi');
$routes->add('tabulasi', 'View::tabulasi');
$routes->add('supervisi', 'View::supervisi');
$routes->add('cctv', 'View::cctv');

// User
$routes->get('berita', 'View::berita');
$routes->get('kegiatan', 'View::kegiatan');
$routes->get('profile', 'View::profile');
$routes->add('covid', 'View::covid');
$routes->add('pelayanan', 'View::pelayanan');
$routes->add('lapor', 'View::lapor');

$routes->add('kawalcovid', 'View::kawalcovid');

$routes->add('auth', 'Auth::auth');
$routes->add('reg', 'Auth::reg');
$routes->add('logout', 'Auth::logout');

$routes->post('getpengaduan', 'Jsondata::getpengaduan');
$routes->post('getBerita', 'Jsondata::getBerita');
$routes->post('getFiles', 'Jsondata::getFiles');
$routes->post('getKegiatan', 'Jsondata::getKegiatan');
$routes->post('getBeritaCovid', 'Jsondata::getBeritaCovid');
$routes->post('getLaporCovid', 'Jsondata::getLaporCovid');
$routes->post('loadBerita', 'Jsondata::loadBerita');
$routes->post('loadBeritaCovid', 'Jsondata::loadBeritaCovid');
$routes->post('loadKegiatan', 'Jsondata::loadKegiatan');
$routes->post('loadparam', 'Jsondata::loadparam');
$routes->post('loadkota', 'Jsondata::loadkota');
$routes->post('loadmutasi', 'Jsondata::loadmutasi');
$routes->post('loadtabulasi', 'Jsondata::loadtabulasi');
$routes->post('loadsupervisi', 'Jsondata::loadsupervisi');
$routes->post('loadcctv', 'Jsondata::loadcctv');
$routes->post('save', 'Jsondata::save');
$routes->post('saveBerita', 'Jsondata::saveBerita');
$routes->post('saveKegiatan', 'Jsondata::saveKegiatan');
$routes->post('saveBeritaCovid', 'Jsondata::saveBeritaCovid');
$routes->post('saveLapor', 'Jsondata::saveLapor');
$routes->post('update', 'Jsondata::update');
$routes->post('addParam', 'Jsondata::addParam');
$routes->post('addUser', 'Jsondata::addUser');
$routes->post('addMutasi', 'Jsondata::addMutasi');
$routes->post('addTabulasi', 'Jsondata::addTabulasi');
$routes->post('addSupervisi', 'Jsondata::addSupervisi');
$routes->post('addcctv', 'Jsondata::addcctv');
$routes->post('actionBerita', 'Jsondata::actionBerita');
$routes->post('actionKegiatan', 'Jsondata::actionKegiatan');
$routes->post('actionBeritaCovid', 'Jsondata::actionBeritaCovid');
$routes->post('actionLaporCovid', 'Jsondata::actionLaporCovid');
$routes->post('actionMutasi', 'Jsondata::actionMutasi');
$routes->post('actionTabulasi', 'Jsondata::actionTabulasi');
$routes->post('actionSupervisi', 'Jsondata::actionSupervisi');
$routes->post('actionCctv', 'Jsondata::actionCctv');
$routes->post('loadBeritaHeadline', 'Jsondata::loadBeritaHeadline');
$routes->post('loadBeritaHeadlineCovid', 'Jsondata::loadBeritaHeadlineCovid');
$routes->post('addKonten', 'Jsondata::addKonten');
$routes->post('loadKonten', 'Jsondata::loadKonten');
$routes->post('loadusers', 'Jsondata::loadusers');
$routes->post('actionUsers', 'Jsondata::actionUsers');

$routes->post('kawalcorona', 'Jsondata::kawalcorona');
$routes->post('coronas', 'Jsondata::coronas');

$routes->post('generatePdf', 'Pdfview::index');

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to it be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH.'Config/'.ENVIRONMENT.'/Routes.php'))
{
	require APPPATH.'Config/'.ENVIRONMENT.'/Routes.php';
}
