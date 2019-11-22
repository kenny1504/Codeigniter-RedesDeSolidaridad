<?php namespace Config;

      use App\Models\oficios;


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
 */

// Create a new instance of our RouteCollection class.
$routes = Services::routes(true);

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

//Rutas Inicio
$routes->get('/', 'Home::index');
$routes->get('/inicio', 'Home::inicio');
$routes->get('/session', 'Home::session');

//Rutas Usuario
$routes->post('/usuario', 'usuario::autenticacion');
$routes->get('/usuario', 'usuario::index');


//Rutas Asignaturas
$routes->get('/asignaturas', 'asignatura::index');
$routes->post('/agregar/asignatura', 'asignatura::agregar');
$routes->post('/eliminar/asignatura', 'asignatura::eliminar1');
$routes->post('/actualizar/asignatura', 'asignatura::actualizar');
$routes->post('/cargarmaterias/asignatura', 'asignatura::cargarmaterias');

//Rutas detalleAsignatura 
$routes->post('/detalleAsignatura/guardar', 'detalleAsignatura::guardar');
$routes->post('/detalleAsignatura/eliminar', 'detalleAsignatura::eliminar');


//Rutas Parentescos
$routes->get('/parentescos', 'parentesco::index');
$routes->post('/eliminar/parentesco', 'parentesco::eliminar');
$routes->post('/actualizar/prentesco', 'parentesco::actualizar');
$routes->post('/agregar/parentesco', 'parentesco::agregar');

//Rutas Oficios
$routes->get('/oficios', 'oficio::index');
$routes->post('/eliminar/oficio', 'oficio::eliminar');
$routes->post('/actualizar/oficio', 'oficio::actualizar');
$routes->post('/agregar/oficio', 'oficio::agregar');

//Rutas Turnos
$routes->get('/turnos', 'turno::index');
$routes->post('/agregar/turno', 'turno::agregar');
$routes->post('/actualizar/turno', 'turno::actualizar');
$routes->post('/eliminar/turno', 'turno::eliminar');

//Rutas Secciones
$routes->get('/secciones', 'seccion::index');
$routes->post('/eliminar/seccion', 'seccion::eliminar');

//Rutas Grupos
$routes->get('/grupos', 'grupo::index');
$routes->post('/eliminar/grupo', 'grupo::eliminar');

//Rutas Grados
$routes->get('/grado', 'grado::index');
$routes->post('/agregar/grado', 'grado::agregar');
$routes->post('/eliminar/grado', 'grado::eliminar');


$routes->post('/cargargrados/asignatura', 'grado::cargargrados');
$routes->post('/cargarmaterias_grado/grado', 'asignatura::cargarmaterias_grado');

//Rutas detalleAsignatura
//$routes->get('/detalleAsignatura/guardar', 'detalleAsignatura::guardar');


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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
