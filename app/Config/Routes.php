<?php namespace Config;

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

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

$routes->group('student', function($routes){
	$routes->add('studentDash', 'Student/StudentController::index');
});


$routes->group('login', function($routes){
	$routes->post('checkLogin', 'UserController::checkLogin');
});

$routes->group('signup', function($routes){
	$routes->post('signMeUp', 'UserController::signMeUp');
});
// $routes->add('login', 'Home::loginDetails');
// $routes->add('register', 'Home::registryDetails');

// $routes->get('student', 'Home::studentDashboard');
// $routes->get('tutor', 'Home::tutorDashboard');

// $routes->get('student-profile', 'Home::studentProfile');
// $routes->get('student-find-tutor', 'Home::studentFindTutor');
// $routes->get('student-classes', 'Home::studentClasses');
// $routes->get('student-groups', 'Home::studentGroups');
// $routes->get('student-account', 'Home::studentAccount');
// $routes->get('student-files', 'Home::studentFiles');
// $routes->get('student-tutor-profile', 'Home::studentTutorProfile');

/**
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
