<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('site', 'Home::header');
$routes->get('activities', 'Home::acts');
$routes->get('achievements', 'Home::ach');
$routes->get('contacts', 'Home::contacts');
