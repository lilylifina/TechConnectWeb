<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// $routes->get('/', 'Home::index');
$routes->get('/', 'HomeController::index');
$routes->get('/about', 'Page::about');
$routes->get('/contact', 'Page::contact');
$routes->get('/faqs', 'Page::faqs');

$routes->get('/news', 'News::index');
$routes->get('/news/(:any)', 'News::viewNews/$1');

$routes->group('admin', function($routes){
	$routes->get('news', 'NewsAdmin::index');
	$routes->get('news/(:segment)/preview', 'NewsAdmin::preview/$1');
    $routes->add('news/new', 'NewsAdmin::create');
	$routes->add('news/(:segment)/edit', 'NewsAdmin::edit/$1');
	$routes->get('news/(:segment)/delete', 'NewsAdmin::delete/$1');
});

$routes->get('/homepage', 'Home::homepage');

$routes->get('/login', 'AuthController::login');
$routes->get('/register', 'AuthController::register');
$routes->post('/login-process', 'AuthController::loginProcess');
$routes->post('/register-process', 'AuthController::registerProcess');
$routes->get('/logout', 'AuthController::logout');

$routes->get('profile', 'Profile::index');
$routes->get('profile/edit', 'Profile::edit');
$routes->post('profile/update', 'Profile::update');

