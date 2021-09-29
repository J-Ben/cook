<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Recette');
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

$routes->get('/', 'Recette::index');
$routes->get('recette', 'Recette::index');
$routes->get('recette/all', 'Recette::all');

$routes->get('ingredient', 'Ingredient::index');
$routes->get('ingredient/all', 'Ingredient::all');

/**
 * 
 *  Routes de Recette
 */

$routes->group('recette', function($routes){
	$routes->add('add','Recette::index'); 
	$routes->add('all','Recette::all');  
	$routes->add('mk','Recette::mk');  
	$routes->add('bmk','Recette::bmk');  
	$routes->add('bmk','Recette::bmk');  
	$routes->add('bmk','Recette::bmk');  
});
	
/**
 * 
 *  Routes de Ingredient
 */

$routes->group('ingredient', function($routes){
	$routes->add('add','Ingredient::index'); 
	$routes->add('all','Ingredient::all');  
});

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
